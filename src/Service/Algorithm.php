<?php

namespace App\Service;

use App\Enum\Civility;
use App\Enum\LeadState;
use App\Entity\Student;
use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Enum\Wish;

class Algorithm
{

    public function __construct(private EntityManagerInterface $entityManager)
    {
    }
// the latitude and longitude needs to be a float

//Haversine formula
    public function Distance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
    {
        $earthRadius = 6371;
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);
        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;
        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }

    public function enumToString(array $enumArray): array
    {
        $stringArray = [];
        foreach ($enumArray as $enum) {
            $stringArray[] = strtoupper($enum->name);
        }
        return $stringArray;
    }

//
    public function Algo(Student $student, SponsorRepository $sponsorRepository, int $distanceMax)
    {
        $kpis = [
            "CONVIVIALITY" => [
                "language" => 100,
                "gender" => 100,
                "objective" => 50,
                "domain" => 30,
                "location" => 100,
            ],
            "HOUSING" => [
                "language" => 100,
                "gender" => 100,
                "objective" => 100,
                "domain" => 10,
                "location" => 100,
            ],
            "ADMINISTRATIVE" => [
                "language" => 70,
                "gender" => 100,
                "objective" => 50,
                "domain" => 10,
                "location" => 50,
            ],
            "INTERNSHIP" => [
                "language" => 20,
                "gender" => 100,
                "objective" => 50,
                "domain" => 100,
                "location" => 10,
            ],
            "WORK" => [
                "language" => 20,
                "gender" => 100,
                "objective" => 50,
                "domain" => 100,
                "location" => 10,
            ],
        ];
        $possibleHits = [];
        $scores = [];
        $indicatorScores = [];

        //student dataset
        $studentSearch = [
            "language" => [],
            "gender" => [],
            "objective" => [],
            "domain" => [],
            "latitude" => $student->getAvailableLeads()->getCity()->getLat(),
            "longitude" => $student->getAvailableLeads()->getCity()->getLng(),
        ];

        foreach($student->getAvailableLeads()->getLanguages() as $language){
            array_push($studentSearch["language"],strtoupper($language->name));
        }

        foreach($student->getAvailableLeads()->getCivility() as $civility){
            array_push($studentSearch["gender"],$civility);
        }

        foreach($student->getAvailableLeads()->getWishes()as $wish){
            array_push($studentSearch["objective"],strtoupper($wish->name));
        }

        foreach ($student->getAvailableLeads()->getCurriculum()->getFields() as $field) {
            array_push($studentSearch["domain"], $field->getName());
        }


        foreach ($student->getLeads() as $lead) {
            if ($lead->getState() == LeadState::REGISTERED) {
                $studentEntity = $lead;
                break;
            }
        }
        //sponsors dataset
        foreach ($sponsorRepository->findAll() as $sponsor) {
            $sponsorTemp = null;
            foreach ($sponsor->getLeads() as $lead) {
                if ($lead->getState() == LeadState::REGISTERED) {
                    $sponsorTemp = $lead;
                    break;
                }
            }
            if(!$sponsorTemp) continue;
            foreach($studentEntity->getWishes() as $wish){
                if(in_array($wish,$sponsorTemp->getWishes()) && !in_array($sponsorTemp->getId(),$possibleHits)){

                    $possibleHits[$sponsor->getId()]["language"]=[];
                    foreach($sponsor->getAvailableLeads()->getLanguages() as $language){
                        array_push($possibleHits[$sponsor->getId()]["language"],strtoupper($language->name));
                    }

                    $possibleHits[$sponsor->getId()]["gender"]=[];
                    foreach($sponsor->getAvailableLeads()->getCivility() as $civility){
                        array_push($possibleHits[$sponsor->getId()]["gender"],$civility);
                    }

                    $possibleHits[$sponsor->getId()]["objective"]=[];

                    foreach($sponsor->getAvailableLeads()->getWishes() as $wish1){
                        array_push($possibleHits[$sponsor->getId()]["objective"],strtoupper($wish1->name));
                    }

                    $possibleHits[$sponsor->getId()]["domain"]=[];
                    foreach( $sponsor->getAvailableLeads()->getWorkfields() as $workfield){
                        array_push($possibleHits[$sponsor->getId()]["domain"],$workfield->getName());
                    }

                    //need to add a function in entity leads that return the available lead
                    $possibleHits[$sponsor->getId()]["latitude"]=$sponsor->getAvailableLeads()->getCity()->getLat();
                    $possibleHits[$sponsor->getId()]["longitude"]=$sponsor->getAvailableLeads()->getCity()->getLng();
                }
            }

        }




        //you should stock the scores of the indicators ( intersect * boost )
        foreach($possibleHits as $sponsorId => $data){
            $score = 0;
            foreach($kpis as $kpi=>$boost) {





                if(in_array($kpi,$data["objective"]) && in_array($kpi,$data["objective"])){


                    //key is language, gender etc

                    $scoreTemp = 0;
                    foreach ($boost as $key => $value) {

                        if($key!="location"){


                            $intersect = array_intersect($data[$key],$studentSearch[$key]);

                            // if the student is MEN and sponsor is WOMEN we divide the indicator by 2
                            if($key == "gender"){
                                if(in_array(Civility::Men,$studentSearch["gender"]) && in_array(Civility::Women,$data["gender"])){
                                    $scoreTemp+=$value/2;
                                    continue;
                                }
                            }
                            $scoreTemp += count($intersect)*$value;


                        }


                    }


                    //if the objective is the housing we use the university's localization to calculate the localization score
                    if($kpi!=Wish::Housing->name){
                        $distance=$this->Distance($data["latitude"],$data["longitude"],$student->getAvailableLeads()->getCity()->getLat(),$student->getAvailableLeads()->getCity()->getLng());
                        if($distance==0){
                            $scoreTemp+=$boost["location"];
                        }else{
                            $scoreTemp+=($boost["location"]/$distance);
                        }
                    }else {
                        $distance=$this->Distance($data["latitude"],$data["longitude"],$student->getAvailableLeads()->getCurriculum()->getCity()->getLat(),$student->getAvailableLeads()->getCurriculum()->getCity()->getLat());
                        if($distance==0){
                            $scoreTemp+=$boost["location"];
                        }else{
                            //($distance/$distanceMax)*$boost["location"] pas possible parce que lorsque on augmente la distance, le score augmente et c'est pas ce qu'on veut :(
                            $scoreTemp+=($boost["location"]/$distance);
                        }
                    }

                    $score += $scoreTemp/count($boost);
                }



            }
            $scores[$sponsorId]=ceil($score/count($kpis));

        }



        return $scores;

    }

}