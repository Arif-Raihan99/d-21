<?php


namespace App\classes;


class Calculator
{
    public $number1;
    public $number2;
    public $option;
    public $result;


    public function __construct($data=null)
    {
        if ($data['hBtn']){
            $this->number1 = $data['num1'];
            $this->number2 = $data['num2'];
            $this->option = $data['option'];
        }
    }

    protected function add(){
        return $this->number1 + $this->number2 ;
    }

    protected function sub(){
        return $this->number1 - $this->number2 ;
    }

    protected function mul(){
        return $this->number1 * $this->number2 ;
    }

    protected function div(){
        return $this->number1 / $this->number2 ;
    }

    protected function mod(){
        return $this->number1 % $this->number2 ;
    }


    public function calculate(){
        switch ($this->option){
            case '+':
                $this->result = $this->add();
                break;

            case '-':
                $this->result = $this->sub();
                break;

            case '*':
                $this->result = $this->mul();
                break;

            case '/':
                $this->result = $this->div();
                break;

            case '%':
                $this->result = $this->mod();
                break;
        }
        return $this->result;
    }

}