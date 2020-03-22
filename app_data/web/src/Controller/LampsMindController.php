<?php

namespace App\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class LampsMindController extends AbstractController
{
    
    private $udp;
    private $tcp;

    public function __construct(ContainerInterface $container)
    {
        $this->udp = $container->get('old_sound_rabbit_mq.udp_request_producer');
        $this->tcp = $container->get('old_sound_rabbit_mq.tcp_request_rpc');
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
     * @Route("/lamp/{id}/brightness/set/{brightness}", name="LampSetBrightness")
     */
    public function SetBrightness(int $id,int $brightness)
    {
        $responseMsg = "";

        if($brightness < 0 || $brightness > 100){
            $responseMsg = "brightness should be between 100 and 0";
            return new Response($responseMsg,400);
        }
        
        $message = "req;$id:1;set:brightness:$brightness";
        $this->udp->publish($message);

        return new Response();
    }

    /**
     * @Route("/lamp/brightness/get/{id}", name="LampGetBrightness")
     */
    public function GetBrightness()
    {
        return new Response($message,501);
    }

    /**
     * @Route("/lamp/ping", name="LampPing")
     */
    public function Ping()
    {
        $this->tcp->addRequest("Ping","tcp","tcp");
        $replies = $this->tcp->getReplies();
        die(var_dump($replies));
        return new Response(implode(";",$replies),501);
    }
}
