<?php

namespace MelhorEnvio\Entities;

class Product extends Package
{
    /**
     * @var string $id
     */
    protected $id;
    /**
    * @var string $name
    */
    protected $name;
    /**
     * @var int $quantity
     */
    protected $quantity;
    /**
     * @var float $insurance_value
     */
    protected $insurance_value;
    /**
     * @var float $unitary_value
     */
    protected $unitary_value;
    

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

    /**
     * Get $name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set $name
     *
     * @param  string  $name  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get $unitary_value
     *
     * @return  float
     */ 
    public function getUnitaryValue()
    {
        return $this->unitary_value;
    }

    /**
     * Set $unitary_value
     *
     * @param  float  $unitary_value  $unitary_value
     *
     * @return  self
     */ 
    public function setUnitaryValue(float $unitary_value)
    {
        $this->unitary_value = $unitary_value;

        return $this;
    }
}