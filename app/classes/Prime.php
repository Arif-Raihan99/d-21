<?php


namespace App\classes;


class Prime
{

//    public function prime(){
//        print_r($_POST);
//    }
//Array ( [numP] => 17 [pBtn] => Submit )

    public $value;
    public $arif;

    public function __construct($data=null)
    {
        if ($data){
            $this->value = $data['inputNumber'];
        }
    }

    public function prime(){
        if ($this->value == 1){
            $this->arif = 0;
        }
        for ($i = 2; $i <= $this->value/2; $i++)
        {
            if ($this->value % $i == 0){
                $this->arif = 0;
            }
        }
        $this->arif = 1;

        if ($this->arif == 1){
            return "It is a prime number";
        }
        else{
            return "It is a non-prime number";
        }
    }
}