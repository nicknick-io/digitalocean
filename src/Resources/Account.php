<?php
namespace NickNickIO\Digitalocean\Resources;

class Account extends Resource
{

    /**
     * @var integer
     */
    public $droplet_limit;

    /**
     * @var integer
     */
    public $floating_ip_limit;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var boolean
     */
    public $email_verified;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $status_message;

    /**
     * @var int
     */
    public $volume_limit;

}