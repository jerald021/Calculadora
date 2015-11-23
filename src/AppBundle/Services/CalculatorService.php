<?php
/**
 * Created by PhpStorm.
 * User: jerald021
 * Date: 22/10/15
 * Time: 20:09
 */

namespace AppBundle\Services;


class CalculatorService
{
    private $op1;
    private $op2;
    private $result;

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;
    }

    public function sum()
    {
        $this->result= $this->op1 + $this->op2;
    }

    public function subtract()
    {
        $this->result= $this->op1 - $this->op2;
    }

    public function multiply()
    {
        $this->result= $this->op1 * $this->op2;
    }

    public function division()
    {
        $this->result= $this->op1 / $this->op2;
    }

    public function getResult()
    {
        return $this->result;
    }

}