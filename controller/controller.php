<?php


class Calc{

    //properties
    public $oper;
    public $num1;
    public $num2;

    //Methods

    public function __contructer(string $one,int $two,int $three){

        $this->oper = $one;
        $this->num1 = $two;
        $this->num2 = $three;

    }

    public function Calculator(){

        switch ($this->oper) {
            case '+':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case '-':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case '/':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case '*':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            default:
            $result = "something went wrong";
            return $result;
                break;
        }

    }

}