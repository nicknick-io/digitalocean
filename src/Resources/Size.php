<?php
namespace NickNickIO\Digitalocean\Resources;

class Size extends Resource
{

    /**
     * @var string
     */
    public $slug;

    /**
     * @var boolean
     */
    public $available;

    /**
     * @var integer
     */
    public $transfer;

    /**
     * @var integer
     */
    public $price_monthly;

    /**
     * @var integer
     */
    public $price_hourly;

    /**
     * @var integer
     */
    public $memory;

    /**
     * @var integer
     */
    public $vcpus;

    /**
     * @var integer
     */
    public $disk;

    /**
     * @var array
     */
    public $regions;

}