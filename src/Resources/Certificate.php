<?php
namespace NickNickIO\Digitalocean\Resources;

class Certificate extends Resource
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
    public $not_after;

    /**
     * @var string
     */
    public $sha1_fingerprint;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var array
     */
    public $dns_names;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $type;

}