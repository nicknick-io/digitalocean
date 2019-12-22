<?php
namespace NickNickIO\Digitalocean\Resources;

class Firewall
{

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var array
     */
    public $pending_changes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $inbound_rules;

    /**
     * @var array
     */
    public $outbound_rules;

    /**
     * @var array
     */
    public $droplet_ids;

    /**
     * @var array
     */
    public $tags;

}