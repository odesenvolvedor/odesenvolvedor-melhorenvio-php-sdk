<?php

namespace MelhorEnvio\Entities;

class Product extends Package
{
    /**
     * @var string $id
     */
    protected $id;
    /**
     * @var int $quantity
     */
    protected $quantity;
    /**
     * @var float $insurance_value
     */
    protected $insurance_value;


    /**
     * Get $id
     *
     * @return  string
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set $id
     *
     * @param  string  $id  $id
     *
     * @return  self
     */ 
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get $quantity
     *
     * @return  int
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set $quantity
     *
     * @param  int  $quantity  $quantity
     *
     * @return  self
     */ 
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get $insurance_value
     *
     * @return  float
     */ 
    public function getInsuranceValue()
    {
        return $this->insurance_value;
    }

    /**
     * Set $insurance_value
     *
     * @param  float  $insurance_value  $insurance_value
     *
     * @return  self
     */ 
    public function setInsuranceValue(float $insurance_value)
    {
        $this->insurance_value = $insurance_value;

        return $this;
    }
}