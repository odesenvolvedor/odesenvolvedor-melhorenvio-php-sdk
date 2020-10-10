<?php

namespace MelhorEnvio\Entities;

class Option extends AbstractEntity
{

    protected $collect; //Boolean
    protected $insuranceValue; //Float
    protected $ownHand; //Boolean
    protected $receipt; //Boolean
    
    /**
     * Class constructor.
     */
    public function __construct()
    {
          $this->collect = false;
          $this->ownHand = false;
          $this->receipt = false;
    }

    public function getCollect() { 
         return $this->collect; 
    }
    public function setCollect($collect) { 
         $this->collect = $collect;
         return $this;
    }    
    public function getInsuranceValue() { 
         return $this->insuranceValue; 
    }
    public function setInsuranceValue($insuranceValue) { 
         $this->insuranceValue = $insuranceValue; 
         return $this;
    }    
    public function getOwnHand() { 
         return $this->ownHand; 
    }
    public function setOwnHand($ownHand) { 
         $this->ownHand = $ownHand; 
         return $this;
    }    
    public function getReceipt() { 
         return $this->receipt; 
    }
    public function setReceipt($receipt) { 
         $this->receipt = $receipt; 
         return $this;
    }    

}