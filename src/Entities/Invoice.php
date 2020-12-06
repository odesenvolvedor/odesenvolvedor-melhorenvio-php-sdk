<?php

namespace MelhorEnvio\Entities;

class Invoice extends AbstractEntity
{
    /**
     * @var string $number
     */
    public $number;
    /**
     * @var string $key
     */
    public $key;
    


    public function getNumber() 
    { 
        return $this->number;
    }
    public function setNumber($number) 
    {
        $this->number = $number;
        return $this;
    }



    public function getKey() 
    {
        return $this->key;
    }
    public function setKey($key) 
    {
        $this->key = $key;
        return $this;
    }
}