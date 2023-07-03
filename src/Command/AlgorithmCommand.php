<?php
namespace App\Command;

use App\Entity\Proposal;
use App\Entity\SponsorshipState;
use App\Enum\Civility;
use App\Enum\LeadState;
use App\Repository\RequestRepository;
use App\Repository\SponsorshipRepository;
use App\Service\Algorithm;
use App\Service\Mailing;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'app:algorithm')]
class AlgorithmCommand extends Command
{
    public function __construct(private SponsorshipRepository $sponsorshipRepository, private RequestRepository $requestRepository, private Mailing $mailing, private Algorithm $algorithm)
    {
        parent::__construct();
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        foreach($this->requestRepository->findBy(['state' => LeadState::REGISTERED]) as $request){
            $this->algorithm->Algo($request, )
        }
    }
}