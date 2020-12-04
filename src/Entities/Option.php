<?php

namespace MelhorEnvio\Entities;

class Option extends AbstractEntity
{
     /**
      * @var boolean $collect
      */
     protected $collect;
     /**
      * @var float $insurance_value
      */
     protected $insurance_value;
     /**
      * @var boolean $own_hand
      */
     protected $own_hand;
     /**
      * @var boolean $receipt
      */
     protected $receipt;
     /**
      * @var string $reminder
      */
     protected $reminder;
     /**
      * @var boolean $reverse
      */
     protected $reverse;
     /**
      * @var boolean $non_commercial
      */
     protected $non_commercial;
     /**
      * @var Invoice $invoice
      */
     protected $invoice;



     
     /**
          * Class constructor.
          */
     public function __construct()
     {
          $this->collect = false;
          $this->own_hand = false;
          $this->receipt = false;
     }




     public function getCollect() 
     {
         return $this->collect; 
     }

     public function setCollect($collect) 
     {
         $this->collect = $collect;
         return $this;
     }



     public function getInsuranceValue() 
     {
         return $this->insurance_value; 
     }

     public function setInsuranceValue($insurance_value) 
     {
         $this->insurance_value = $insurance_value; 
         return $this;
     }

     
     
     public function getOwnHand() 
     {
         return $this->own_hand; 
     }

     public function setOwnHand($own_hand) 
     {
         $this->own_hand = $own_hand; 
         return $this;
     }

     
     
     public function getReceipt() 
     {
         return $this->receipt; 
     }

     public function setReceipt($receipt) 
     {
         $this->receipt = $receipt; 
         return $this;
     }    



     public function getReverse() 
     {
         return $this->reverse;
     }

     public function setReverse($reverse) 
     {
         $this->reverse = $reverse;
         return $this;
     }



     public function getNonCommercial() 
     {
         return $this->non_commercial;
     }

     public function setNonCommercial($non_commercial) 
     {
         $this->non_commercial = $non_commercial;
         return $this;
     }

    

     public function getInvoice() 
     {
          $this->invoice = empty($this->invoice) ? new Invoice() : $this->invoice;
         return $this->invoice;
     }

     public function setInvoice(Invoice $invoice) 
     {
         $this->invoice = $invoice;
         return $this;
     }



     public function getReminder() 
     {
         return $this->reminder;
     }
     
     public function setReminder($reminder) 
     {
         $this->reminder = $reminder;
         return $this;
     }
}