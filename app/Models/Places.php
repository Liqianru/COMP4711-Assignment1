<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
             'id' => 1,
            'name' => 'Than warren rabbit',
            'feed' =>' Herbivores',
            'image' => 'Than warren rabbit.jpg',
             'list' => 'lagomorpha',
             'size' =>' The standard weight is 8 to 12 pounds is one of the large rabbits ',
             'country' => 'In Antwerp',
            
        ],
        '2' => [
            'id' => 2,
            'name' => 'Giant checkered rabbit',
            'feed' =>' Herbivores',
            'image' => 'Giant checkered rabbit.jpg',
            'list' =>'lagomorpha ',
             'size' =>'A large rabbit larger than 5kg, similar in appearance to a Himalayan rabbit, but smaller in stature than a Himalayan rabbit.' ,
             'country' =>'The United States' ,
        ],
        '3' => [
            'id' => 3,
            'name' => 'Cream of the rabbit',
            'feed' =>'Herbivores' ,
            'image' => 'Cream of the rabbit.jpg',
            'list' =>'lagomorpha ',
             'size' =>'The hair is quite thick at 3.8-5kg. The weight of the bogey rabbit is about 4-5kg. Compared with the Champagne rabbit, the bogey rabbit is relatively small in size.' ,
             'country' =>'The French' ,
        ],
        '4' => [
            'id' => 4,
            'name' => 'American Ginger rabbit',
            'feed' => 'Herbivores',
            'image' => 'American Ginger rabbit.jpg',
            'list' => 'lagomorpha',
             'size' =>'The standard gingira rabbit has a short body, a flat head, upright ears and a length of no more than 12cm.' ,
             'country' =>'The United States' ,
        ],
        '5' => [
            'id' => 5,
            'name' => 'Begonia dwarf rabbit',
            'feed' =>'Herbivores' ,
            'image' => 'Begonia dwarf rabbit.jpg',
            'list' => 'lagomorpha',
             'size' =>'The dwarf Begonia rabbit is petite, with ears no longer than 7cm and weight generally less than 1.36kg.' ,
             'country' => 'Germany, the United States, France',
        ],
         '6' => [
            'id' => 6,
            'name' => 'The dodgers rabbit',
             'feed' =>' Herbivores',
            'image' => 'The dodgers rabbit.jpg',
             'list' => 'lagomorpha',
             'size' =>'It is a petite breed of medium sized rabbit with a standard weight of 3.5 to 5.5 pounds.' ,
             'country' => 'In the Netherlands',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
