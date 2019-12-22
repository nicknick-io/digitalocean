<?php
namespace NickNickIO\Digitalocean\Resources;

class FloatingIP extends Resource
{

    /**
     * @var string
     */
    public $ip;

    /**
     * @var object
     */
    public $region;

    /**
     * @var object
     */
    public $droplet;

}