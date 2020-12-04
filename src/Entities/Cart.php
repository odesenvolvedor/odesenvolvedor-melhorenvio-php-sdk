<?php

namespace MelhorEnvio\Entities;

class Cart
{
    /**
     * @var int $service
     */
    protected $service;
    /**
     * @var int $agency
     */
    protected $agency;
    /**
     * @var From $from
     */
    protected $from;
    /**
     * @var To $to
     */
    protected $to;
    /**
     * @var array(Product) $products
     */
    protected $products;
    /**
     * @var Package $package
     */
    protected $package;
    /**
    * @var Option $options
    */
    protected $options;
    /**
     * @var string $coupon
     */
    protected $coupon;


    public function getService() 
    {
        return $this->service;
    }
    public function setService($service) 
    {
        $this->service = $service;
        return $this;
    }


    public function getAgency() 
    {
        return $this->agency;
    }
    public function setAgency($agency) 
    {
        $this->agency = $agency;
        return $this;
    }
    

    public function getFrom() 
    {
        $this->from = empty($this->from) ? new From() : $this->from;
        return $this->from;
    }
    public function setFrom(From $from) 
    {
        $this->from = $from;
        return $this;
    }
    

    public function getTo()
    {
        $this->to = empty($this->to) ? new To() : $this->to;
        return $this->to;
    }
    public function setTo(To $to) 
    {
        $this->to = $to;
        return $this;
    }
    

    public function getProducts() 
    {
        return $this->products;
    }
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



    public function getPackage()
    {
        $this->package = empty($this->package) ? new Package() : $this->package;
        return $this->package;
    }
    public function setPackage(Package $package)
    {
        $this->package = $package;
        return $this;
    }
    

    public function getOptions() 
    {
        $this->options = empty($this->options) ? new Option() : $this->options;
        return $this->options;
    }
    public function setOptions(Option $options)
    {
        $this->options = $options;
        return $this;
    }
    

    public function getCoupon()
    {
        return $this->coupon;
    }
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
        return $this;
    }
    

}