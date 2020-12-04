<?php

namespace MelhorEnvio\Entities;

class Package extends AbstractEntity
{

     /**
      * @var integer $height
      */
     protected $height;
     /**
      * @var integer $length
      */
     protected $length;
     /**
      * @var integer $weight
      */
     protected $weight;
     /**
      * @var integer $width
      */
     protected $width;


     
    
     public function getHeight()
     {
         return $this->height; 
     }
     public function setHeight($height)
     {
         $this->height = $height;
         return $this;
     }    



     public function getLength()
     {
         return $this->length; 
     }
     public function setLength($length)
     {
         $this->length = $length;
         return $this;
     }



     public function getWeight()
     {
         return $this->weight; 
     }
     public function setWeight($weight)
     {
         $this->weight = $weight;
         return $this;
     }



     public function getWidth()
     {
         return $this->width; 
     }
     public function setWidth($width)
     {
         $this->width = $width;
         return $this;
     }
}