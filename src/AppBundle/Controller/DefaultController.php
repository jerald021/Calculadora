<?php

namespace AppBundle\Controller;

use AppBundle\Services\CalculatorService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    //INDEX ORIGINAL
//    /**
//     * @Route("/index", name="homepage")
//     */
//    public function indexAction()
//    {
//        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', array(
//            /*'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),*/
//        ));
//    }

    /**
     * @Route("/index", name="index")
     */
    public function indexAction(Request $request)
    {
        return $this->redirect('http://www.google.es');

        // redirectToRoute is equivalent to using redirect() and generateUrl() together:
        // return $this->redirect($this->generateUrl('homepage'), 301);

    }

    /**
     * @Route("/another", name="another")
     */
    public function anotherAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/another.html.twig', array(
            /*'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),*/

        ));
    }

    /**
     * @Route("/test", name="app_default_test")
     */
    public function testAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            /*'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),*/
            'name' => 'asdasdasd',
            'edad' => '591',
            'ip' => $request->getClientIp(),
        ));
    }

    /**
     * @Route("/hello", name="hello")
     */
    public function helloAction()
    {
        return new Response('Hello world!');
    }


}
