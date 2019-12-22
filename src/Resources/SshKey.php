<?php
namespace NickNickIO\Digitalocean\Resources;

class SshKey extends Resource
{

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $public_key;

    /**
     * @var string
     */
    public $name;

}