<?php

namespace MelhorEnvio\Entities;

class Package extends AbstractEntity
{

    protected $height; //Integer
    protected $length; //Integer
    protected $weight; //Integer
    protected $width; //Integer
    
    public function getHeight() { 
         return $this->height; 
    }
    public function setHeight($height) { 
         $this->height = $height;
         return $this;
    }    
    public function getLength() { 
         return $this->length; 
    }
    public function setLength($length) { 
         $this->length = $length;
         return $this;
    }    
    public function getWeight() { 
         return $this->weight; 
    }
    public function setWeight($weight) { 
         $this->weight = $weight;
         return $this;
    }    
    public function getWidth() { 
         return $this->width; 
    }
    public function setWidth($width) { 
         $this->width = $width;
         return $this;
    }    

}