<?php

namespace messanger\chatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@chat/Default/share.html.twig');
    }
}
