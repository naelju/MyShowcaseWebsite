<?php
namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        $date= new DateTime('now');
        $date=$date->format('Y-n-j');
        $date=explode('-',$date);
        $year=$date[0];
        $month=$date[1];
        $day=$date[2];
        $age=$year-2002;
        if($month<11){
            $age--;
        }elseif($month==11){
            if($day<4){
                $age--;
            }
        }
        
 
        
        return $this->render('homepage.html.twig', ['age'=>$age]);
    }

    

}