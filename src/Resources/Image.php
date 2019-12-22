<?php
namespace NickNickIO\Digitalocean\Resources;

class Image extends Resource
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
     * @var null|string
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
     * @var string
     */
    public $created_at;

    /**
     * @var integer
     */
    public $min_disk_size;

    /**
     * @var integer
     */
    public $size_gigabytes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var array
     */
    public $tags;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $error_message;

}