<?php

namespace MelhorEnvio\Entities;

abstract class AbstractFromTo extends AbstractEntity
{

     protected $name; //String
     protected $phone; //String
     protected $email; //String
     protected $document; //String
     protected $company_document; //String
     protected $state_register; //String
     protected $address; //String
     protected $complement; //String
     protected $number; //String
     protected $district; //String
     protected $city; //String
     protected $state_abbr; //String
     protected $country_id; //String
     protected $postal_code; //String
     protected $note; //String
     

     public function getName() { 
         return $this->name;
    }
    public function setName($name) { 
         $this->name = $name;
         return $this; 
    }

    public function getPhone() { 
         return $this->phone;
    }
    public function setPhone($phone) { 
         $this->phone = $phone;
         return $this;
    }

    public function getEmail() { 
         return $this->email;
    }
    public function setEmail($email) { 
         $this->email = $email;
         return $this;
    }

    public function getDocument() { 
         return $this->document;
    }

    public function setDocument($document) { 
         $this->document = $document;
         return $this;
    }

    public function getCompanyDocument() { 
         return $this->company_document;
    }

    public function setCompanyDocument($company_document) { 
         $this->company_document = $company_document;
         return $this;
    }

    public function getStateRegister() { 
         return $this->state_register;
    }
    public function setStateRegister($state_register) { 
         $this->state_register = $state_register;
         return $this;
    }

    public function getAddress() { 
         return $this->address;
    }

    public function setAddress($address) { 
         $this->address = $address;
         return $this;
    }

    public function getComplement() { 
         return $this->complement;
    }
    public function setComplement($complement) { 
         $this->complement = $complement;
         return $this;
    }

    public function getNumber() { 
         return $this->number;
    }

    public function setNumber($number) { 
         $this->number = $number;
         return $this;
    }

    public function getDistrict() { 
         return $this->district;
    }

    public function setDistrict($district) { 
         $this->district = $district;
         return $this;
    }

    public function getCity() { 
         return $this->city;
    }

    public function setCity($city) { 
         $this->city = $city;
         return $this;
    }

    public function getStateAbbr() { 
         return $this->state_abbr;
    }

    public function setStateAbbr($state_abbr) { 
         $this->state_abbr = $state_abbr;
         return $this;
    }

    public function getCountryId() { 
         return $this->country_id;
    }
    public function setCountryId($country_id) { 
         $this->country_id = $country_id;
         return $this;
    }

    public function getPostalCode() { 
         return $this->postal_code;
    }

    public function setPostalCode($postal_code) { 
         $this->postal_code = $postal_code;
         return $this;
    }

    public function getNote() { 
         return $this->note;
    }

    public function setNote($note) { 
         $this->note = $note;
         return $this;
    }
}