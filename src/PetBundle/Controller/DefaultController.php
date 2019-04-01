<?php

namespace PetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/" , name="petIndex")
     * @Method({"GET"})
     */
    public function indexAction(Request $request)
    {
        return new Response("Pet", 200, array());
    }

    /**
     * @Route("/test" , name="petTest")
     * @Method({"GET"})
     */
    public function testAction(Request $request)
    {
        return new Response("Pet", 200, array());
    }
}
