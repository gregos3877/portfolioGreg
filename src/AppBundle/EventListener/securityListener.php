<?php

namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class securityListener
{

    private $router;
    private $security;

    public function __construct(UrlGeneratorInterface $router, Security $security)
    {
        $this->router = $router;
        $this->security = $security;
    }

//    public function onKernelController(FilterControllerEvent $event)
//    {
//        if ($event->getController()[1] == "loginAction") {
////            dump($event);
//            $controller = $event->getController();
//            if ($controller[1] == "loginAction" && $this->security->getUser() != null) {
//                return $this->router->generate('homepage');
//                echo "ok";
//            }
//        } else
//            dump("ko");
//    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        dump($event);
        $event->setResponse($this->router->generate('homepage'));
    }
}