<?php
namespace NickNickIO\Digitalocean\Resources;

class Database extends Resource
{

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $version;

    /**
     * @var object
     */
    public $connection;

    /**
     * @var array
     */
    public $users;

    /**
     * @var array
     */
    public $db_names;

    /**
     * @var integer
     */
    public $num_nodes;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var object
     */
    public $maintenance_window;

    /**
     * @var string
     */
    public $created_at;

}