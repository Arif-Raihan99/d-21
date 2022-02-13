<?php


namespace App\classes;


class Product
{
    public function getAllProducts(){
        return[
            0=> [
                'id'           => 1,
                'name'         => 'New Product',
                'price'        => '4500',
                'description'  => 'description',
                'image'        => 'new.jpeg'
            ],
            1=> [
                'id'           => 2,
                'name'         => 'New T-Shirt',
                'price'        => '450',
                'description'  => 'Denim t-shirt',
                'image'        => 'tshirt.jpg'
            ],
            2=> [
                'id'           => 3,
                'name'         => 'New Saree',
                'price'        => '2500',
                'description'  => 'Jamdani',
                'image'        => 'saree.jpg'
            ],
            3=> [
                'id'           => 4,
                'name'         => 'New Lunggi',
                'price'        => '400',
                'description'  => 'Lungi Dance',
                'image'        => 'lungi.jpg'
            ],
        ];
    }
}