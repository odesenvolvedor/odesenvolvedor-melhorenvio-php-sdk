<?php

namespace MelhorEnvio\Entities;

class Shipment extends AbstractEntity
{

    /**
     * @var From $from
     */
    protected $from;
    /**
     * @var Option $options
     */
    protected $options;
    /**
     * @var Package $package
     */
    protected $package;
    /**
     * @var array of Product
     */
    protected $products;
    /**
     * @var String
     */
    protected $services;
    /**
     * @var To
     */
    protected $to; //To

    public function getFrom()
    {
        $this->from = empty($this->from) ? new From() : $this->from;
        return $this->from;
    }
    public function setFrom($from)
    {
        $this->from = $from;
    }
    public function getOptions()
    {
        $this->options = empty($this->options) ? new Option() : $this->options;
        return $this->options;
    }
    public function setOptions($options)
    {
        $this->options = $options;
    }
    public function getPackage()
    {
        $this->package = empty($this->package) ? new Package() : $this->package;
        return $this->package;
    }
    public function setPackage($package)
    {
        $this->package = $package;
    }
    public function getServices()
    {
        return $this->services;
    }
    public function setServices($services)
    {
        $this->services = $services;
    }
    public function getTo()
    {
        $this->to = empty($this->to) ? new To() : $this->to;
        return $this->to;
    }
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * Get the value of products
     *
     * @return  Product[]
     */ 
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @param  array  $products
     *
     * @return  self
     */ 
    public function setProducts(array $products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Add products
     *
     * @param  Product  $product
     *
     * @return  self
     */ 
    public function addProduct(Product $product)
    {
        $this->products[] = $product;

        return $this;
    }
}
