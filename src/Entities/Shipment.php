<?php

namespace MelhorEnvio\Entities;

class Shipment extends AbstractEntity
{

    /**
     * @var From
     */
    protected $from;
    /**
     * @var Option
     */
    protected $options;
    /**
     * @var Package
     */
    protected $package;
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
}
