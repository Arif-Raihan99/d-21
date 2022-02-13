<?php


namespace App\classes;


class Evenodd
{

    public $numberOne;
    public $numberTwo;
    public $option1;
    public $result1;
    public $temp;

    public function __construct($data=null)
    {
        if ($data['eoBtn']){
            $this->numberOne = $data['number1'];
            $this->numberTwo = $data['number2'];
            $this->option1 = $data['type'];
        }
    }


    public function arif(){

        if ($this->numberOne > $this->numberTwo){
            $this->temp = $this->numberOne;
            $this->numberOne = $this->numberTwo;
            $this->numberTwo = $this->temp;
        }

        if ($this->option1=='even'){
            for ($i=$this->numberOne; $i<=$this->numberTwo; $i++){
                if ($i%2==0){
                    $this->result1 .= $i.' ';
                }
            }
        }
        else{
            for ($i=$this->numberOne; $i<=$this->numberTwo; $i++){
                if ($i%2!=0){
                    $this->result1 .= $i.' ';
                }
            }
        }
        return $this->result1;
    }
}