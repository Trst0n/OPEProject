<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\TwigTest;

class AppExtension extends AbstractExtension
{
    public function getTests()
    {
        return [
            new TwigTest('instanceof', [$this, 'isInstanceof']),
        ];
    }

    public function getFunctions()
    {
        return array(
            new TwigFunction('getfile', [$this, 'getFile']),
        );
    }

    /**
     * @param $var
     * @param $instance
     * @return bool
     */
    public function isInstanceof($var, $instance) {
        return  $var instanceof $instance;
    }

    /**
     * @param $var
     * @return array
     */
    public function getFile($var){

        $log = [];

        $logs = [];
        $file = file($var);
        $file = array_reverse($file);


        foreach ($file as $line){
            if(!str_contains($line,"email")) {
                $log[] = [substr($line, 71, -6), substr($line, 48, 17)];
            }
        }

        for($i = 0; $i < 5; $i++){
            if(array_key_exists($i,$log)){
                $logs[]=$log[$i];

            }
        }



        return $logs;
    }
}