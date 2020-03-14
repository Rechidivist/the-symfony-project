<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Service\RabbitControll;

class LampsMindController extends AbstractController
{

    public function __construct()
    {
    }
    /**
     * @Route("/lamp/force_refresh", name="LampForceRefresh")
     */
    public function ForceUpdateAll()
    {
        return new Response($message,501);
    }

    /**
     * @Route("/lamp/set/{id}", name="LampSetter")
     */
    public function Setter(int $id)
    {
        $request = Request::createFromGlobals();
        $a = $request->query->get('power');
        $a .= "; ";
        $a .= $request->query->get('brightness');

        return new Response($a,200);
    }

    /**
     * @Route("/lamp/group/{id}", name="LampForceRefresh")
     */
    public function SetGroup(int $id)
    {

    }

    /**
     * @Route("/lamp/force_refresh", name="LampForceRefresh")
     */
    public function GetGroup(int $id)
    {

    }

    /**
     * @Route("/lamp/{id}/power/set/{do}", requirements={"do" = "on|off" }, name="LampSetPower")
     */
    public function SetPower(int $id,string $do,RabbitControll $rabbitMessager)
    {
        $rabbitMessager->Send();
        return new Response("",200);
    }

    /**
     * @Route("/lamp/{id}/power/get", name="LampGetPower")
     */
    public function GetPower(int $id)
    {
        return new Response($message,501);
    }

    /**
     * @Route("/lamp/{id}/brightness/set/{brightness}", name="LampSetBrightness")
     */
    public function SetBrightness(int $id,int $brightness)
    {
        $message = "";

        if($brightness < 0 || $brightness > 100){
            $message = "brightness should be between 100 and 0";
            return new Response($message,400);
        }

        return new Response($message,200);
    }

    /**
     * @Route("/lamp/brightness/get/{id}", name="LampGetBrightness")
     */
    public function GetBrightness()
    {
        return new Response($message,501);
    }
}
