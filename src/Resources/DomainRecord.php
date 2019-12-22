<?php
namespace NickNickIO\Digitalocean\Resources;

class DomainRecord extends Resource
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $data;

    /**
     * @var null|integer
     */
    public $priority;

    /**
     * @var null|integer
     */
    public $port;

    /**
     * @var integer
     */
    public $ttl;

    /**
     * @var null|integer
     */
    public $weight;

    /**
     * @var integer
     */
    public $flags;

    /**
     * @var string
     */
    public $tag;

}