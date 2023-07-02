<?php

namespace App\Service;

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
            "objective" => $student->getAvailableLeads()->getWishes(),
            "domain" => [],
            "latitude" => $student->getAvailableLeads()->getCity()->getLat(),
            "longitude" => $student->getAvailableLeads()->getCity()->getLng(),
        ];

        foreach($student->getAvailableLeads()->getLanguages() as $language){
            array_push($studentSearch["language"],$language->name);
        }

        array_push($studentSearch["gender"], $student->getAvailableLeads()->getCivility());

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
                        array_push($possibleHits[$sponsor->getId()]["language"],$language->name);
                    }
                    $possibleHits[$sponsor->getId()]["gender"]=[];
                    array_push($possibleHits[$sponsor->getId()]["gender"],$sponsor->getAvailableLeads()->getCivility());
                    $possibleHits[$sponsor->getId()]["objective"]=$sponsor->getAvailableLeads()->getWishes();
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

                $array =  $this->enumToString($data["objective"]);



                if(in_array($kpi,$this->enumToString($data["objective"])) && in_array($kpi,$this->enumToString($studentSearch["objective"]))){

                    //key is language, gender etc
                    foreach ($boost as $key => $value) {
                        $scoreTemp = 0;
                        if($key=="language")
                            $intersect = array_intersect($data[$key],$studentSearch[$key]);
                        $scoreTemp += count($intersect)*$value;
                    }


                    //if the objective is the housing we use the university's localization to calculate the localization score
                    if($kpi!=Wish::Housing->name){
                        $distance=$this->Distance($data["latitude"],$data["longitude"],$student->getAvailableLeads()->getCity()->getLat(),$student->getAvailableLeads()->getCity()->getLng());
                        if($distance==0){
                            $scoreTemp+=$boost["location"];
                        }else{
                            $scoreTemp+=($distance/$distanceMax)*$boost["location"];
                        }
                    }else {
                        $distance=$this->Distance($data["latitude"],$data["longitude"],$student->getAvailableLeads()->getCurriculum()->getCity()->getLat(),$student->getAvailableLeads()->getCurriculum()->getCity()->getLat());
                        if($distance==0){
                            $scoreTemp+=$boost["location"];
                        }else{
                            $scoreTemp+=($distance/$distanceMax)*$boost["location"];
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