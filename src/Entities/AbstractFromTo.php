<?php

namespace MelhorEnvio\Entities;

abstract class AbstractFromTo extends AbstractEntity
{

    protected $address; //String
    protected $number; //String
    protected $postal_code; //String
    
    public function getAddress() { 
         return $this->address; 
    }
    public function setAddress($address) { 
         $this->address = $address;
         return $this;
    }    
    public function getNumber() { 
         return $this->number; 
    }
    public function setNumber($number) { 
         $this->number = $number;
         return $this;
    }    
    public function getPostalCode() { 
         return $this->postal_code; 
    }
    public function setPostalCode($postal_code) { 
         $this->postal_code = $postal_code;
         return $this;
    }    

}