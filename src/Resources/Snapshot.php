<?php
namespace NickNickIO\Digitalocean\Resources;

class Snapshot extends Resource
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $distribution;

    /**
     * @var null || string
     */
    public $slug;

    /**
     * @var boolean
     */
    public $public;

    /**
     * @var array
     */
    public $regions;

    /**
     * @var integer
     */
    public $min_disk_space;

    /**
     * @var string
     */
    public $created_at;

}