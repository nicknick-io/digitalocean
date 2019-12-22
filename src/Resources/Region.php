<?php
namespace NickNickIO\Digitalocean\Resources;

class Region extends Resource
{

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $sizes;

    /**
     * @var boolean
     */
    public $available;

    /**
     * @var array
     */
    public $features;

}