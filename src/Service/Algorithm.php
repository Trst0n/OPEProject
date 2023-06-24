<?php

namespace App\Service;
use App\Entity\Sponsor;
use App\Entity\Student;
use App\Entity\Wish;
use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;

class Algorithm
{
    private EntityManagerInterface $entityManager;
    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    public function Algo(Student $student){
        $kpis = [
            "CONVIVIALITY"=>[
                "language"=>50,
                "gender"=>100,
                "objective"=>30,
                "domain"=>50,
                "location"=>100,
            ],
            "HOUSING"=>[
                "language"=>50,
                "gender"=>100,
                "objective"=>100,
                "domain"=>10,
                "location"=>0,
            ],
            "ADMINISTRATIVE"=>[
                "language"=>80,
                "gender"=>100,
                "objective"=>60,
                "domain"=>10,
                "location"=>100,
            ],
            "INTERNSHIP"=>[
                "language"=>50,
                "gender"=>100,
                "objective"=>100,
                "domain"=>100,
                "location"=>80,
            ],
            "WORK"=>[
                "language"=>50,
                "gender"=>100,
                "objective"=>30,
                "domain"=>50,
                "location"=>100,
            ],
        ];
        $possibleHits=[];
        $scores= [];
        $sponsorRepository = $this->entityManager->getRepository(SponsorRepository::class);


        foreach($student->getLeads() as $lead){
            if($lead->getState()=="AVAILABLE"){
                $studentEntity = $lead;
                break;
            }
        }

        foreach($sponsorRepository->findAll() as $sponsor){
            $sponsorTemp=null;
            foreach($sponsor->getLeads() as $lead){
                if($lead->getState()=="AVAILABLE"){
                    $sponsorTemp = $lead;
                    break;
                }
            }
            if(!$sponsorTemp) continue;
            for($j=0;$j<count($studentEntity->getWishes());$j++){
                if(in_array($studentEntity->getWishes()[$j],$sponsorTemp->getWishes()) && $possibleHits[$sponsor->getId()]==null){
                    $possibleHits[$sponsor->getId()]["gender"]=$sponsor->getCivility();
                    $possibleHits[$sponsor->getId()]["language"]=$sponsor->getLanguages();
                    $possibleHits[$sponsor->getId()]["domain"]=$sponsor->getDomaine();
                    $possibleHits[$sponsor->getId()]["objective"]=$sponsor->getWishes();
                }
            }
        }


        foreach($possibleHits as $sponsorId => $data){
            $score = 0;
            foreach($kpis as $kpi=>$boost){
                $intersect = array_intersect($data[$kpi],$studentEntity->getWishes());
                $score += count($intersect)*$boost[$kpi];
            }
            $scores[$sponsorId]=$score/count($kpis);

        }
        arsort($scores,SORT_NUMERIC);
        return $scores;



    }
}