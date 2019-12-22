<?php
namespace NickNickIO\Digitalocean\Resources;

class LoadBalancer extends Resource
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
    public $ip;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $created_at;

    /**
     * @var object
     */
    public $forwarding_rules;

    /**
     * @var object
     */
    public $health_check;

    /**
     * @var object
     */
    public $sticky_sessions;

    /**
     * @var object
     */
    public $region;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var array
     */
    public $droplet_ids;

    /**
     * @var boolean
     */
    public $redirect_http_to_https;

    /**
     * @var boolean
     */
    public $enable_proxy_protocol;

}