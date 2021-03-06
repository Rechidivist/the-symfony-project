<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AllLampsInfoController extends AbstractController
{
    /**
     * @Route("/AllLampsForMap.json", name="AllLampsForMap")
     */
    public function AllLampsForMap()
    {
        $AllLamps = $this->getDoctrine()->getRepository(\App\Entity\Lamps::class)->findAll();
        
        foreach($AllLamps as $lamp){
            $mask['type'] = "FeatureCollection";
            $mask['features'][] =  array(
                "id"=> $lamp->GetID(),
                "type"=>"Feature",
                "geometry" => array (
                      "type" => "Point",
                      "coordinates" => [floatval($lamp->getPositionX()), floatval($lamp->getPositionY())]
                ),
                "data"=> [
                    "power"=> "on",
                    "brightness"=> 34
                ],
                "options"=>[
                    "balloonContentLayout"=>"my#baloonLayoutClass"
                ],
                "properties" => array (
                       "iconContent" => "Л".$lamp->GetID(),
                       "power"=> $lamp->GetPower(),
                       "brightness"=>  $lamp->GetBrightness(),
                       "lamp_id"=> $lamp->GetID()
                       //"group"=> $lamp->GetGroup()
                 )
            );
        }  
        $response = new Response (\json_encode($mask));

        return $response;
    }
}
