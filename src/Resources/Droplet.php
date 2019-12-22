<?php
namespace NickNickIO\Digitalocean\Resources;

class Droplet extends Resource
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
     * @var boolean
     */
    public $locked;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var string
     */
    public $status;

    /**
     * @var array
     */
    public $backup_ids;

    /**
     * @var array
     */
    public $snapshot_ids;

    /**
     * @var array
     */
    public $features;

    /**
     * @var object
     */
    public $region;

    /**
     * @var object
     */
    public $image;

    /**
     * @var object
     */
    public $size;

    /**
     * @var string
     */
    public $size_slug;

    /**
     * @var object
     */
    public $networks;

    /**
     * @var null|object
     */
    public $kernel;

    /**
     * @var null|object
     */
    public $next_backup_window;

    /**
     * @var array
     */
    public $tags;

    /**
     * @var array
     */
    public $volume_ids;

}