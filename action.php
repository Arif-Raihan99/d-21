<?php

require_once 'vendor/autoload.php';

use App\classes\Calculator;
use App\classes\Evenodd;
use App\classes\Prime;
use App\classes\Product;


if (isset($_GET['pages'])){
    if ($_GET['pages'] == 'home'){
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'oddeven'){
        include 'pages/oddeven.php';
    }
    elseif ($_GET['pages'] == 'prime'){
        include 'pages/prime.php';
    }
    elseif ($_GET['pages'] == 'product'){
        $product = new Product();
        $products = $product->getAllProducts();
        include 'pages/product.php';
    }
}
elseif(isset($_POST['hBtn'])){
    $calculator = new Calculator($_POST);
    $result = $calculator->calculate();
    include 'pages/home.php';
}
elseif(isset($_POST['eoBtn'])){
    $calculator = new Evenodd($_POST);
    $result = $calculator->arif();
    include 'pages/oddeven.php';
}
elseif(isset($_POST['pBtn'])){
    $primeNum = new Prime($_POST);
    $result = $primeNum->prime();
    include 'pages/prime.php';
}

    //echo $_POST['num1'].' '.$_POST['option'].' '.$_POST['num2'].' = '.$result;



