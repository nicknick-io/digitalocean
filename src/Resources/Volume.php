<?php
namespace NickNickIO\Digitalocean\Resources;

class Volume extends Resource
{

    /**
     * @var string
     */
    public $id;

    /**
     * @var object
     */
    public $region;

    /**
     * @var array
     */
    public $droplet_ids;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var integer
     */
    public $size_gigabytes;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var string
     */
    public $filesystem_type;

    /**
     * @var string
     */
    public $filesystem_label;

    /**
     * @var array
     */
    public $tags;

}