<?php
namespace NickNickIO\Digitalocean\Resources;

class Action extends Resource
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $started_at;

    /**
     * @var string
     */
    public $completed_at;

    /**
     * @var integer
     */
    public $resource_id;

    /**
     * @var string
     */
    public $resource_type;

    /**
     * @var object
     */
    public $region;

    /**
     * @var null|string
     */
    public $region_slug;

}