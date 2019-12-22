<?php
namespace NickNickIO\Digitalocean\Resources;

class Domain extends Resource
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $ttl;

    /**
     * @var string
     */
    public $zone_file;

}