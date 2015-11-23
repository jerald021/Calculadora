<?php

namespace AppBundle\Controller;

use AppBundle\Services\CalculatorService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class Calculadora
 * @package AppBundle\Controller
 */
class CalculadoraController extends Controller
{

    /**
     * @Route("/calculadora", name="calculadora")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            /*'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),*/
        ));
    }


    /**
     * @Route("/suma", name="suma")
     */
    public function sumaAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $c = $this->container->get('calculadora');

        $c->setOp1($op1);
        $c->setOp2($op2);

        $c->sum();

        $result = $c->getResult();

        // replace this example code with whatever you need
        return $this->render(':default:operaciones.html.twig', array(
            "result" => $result,

        ));
    }

    /**
     * @route("/resta", name="resta")
     */
    public function restaAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $c = $this->container->get('calculadora');

        $c->setOp1($op1);
        $c->setOp2($op2);

        $c->subtract();

        $result = $c->getResult();

        // replace this example code with whatever you need
        return $this->render(':default:operaciones.html.twig', array(
            "result" => $result,
        ));
    }

    /**
     * @route("/multiplicar", name="multiplicar")
     */
    public function multiplicarAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $c = $this->container->get('calculadora');

        $c->setOp1($op1);
        $c->setOp2($op2);

        $c->multiply();

        $result = $c->getResult();

        // replace this example code with whatever you need
        return $this->render(':default:operaciones.html.twig', array(
            "result" => $result,
        ));
    }

    /**
     * @route("/dividir", name="dividir")
     */
    public function dividirAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');

        $c = $this->container->get('calculadora');

        $c->setOp1($op1);
        $c->setOp2($op2);

        $c->division();

        $result = $c->getResult();

        // replace this example code with whatever you need
        return $this->render(':default:operaciones.html.twig', array(
            "result" => $result,
        ));
    }





}
