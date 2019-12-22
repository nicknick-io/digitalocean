<?php
namespace NickNickIO\Digitalocean\Resources;

class Project extends Resource
{

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $owner_uuid;

    /**
     * @var integer
     */
    public $owner_id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $purpose;

    /**
     * @var string
     */
    public $environment;

    /**
     * @var boolean
     */
    public $is_default;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var string
     */
    public $updated_at;

}