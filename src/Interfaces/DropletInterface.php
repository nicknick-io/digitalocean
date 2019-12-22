<?php
namespace NickNickIO\Digitalocean\Interfaces;

use NickNickIO\Digitalocean\Connection;

interface DropletInterface
{

    /**
     * DropletInterface constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection);

    /**
     * Get all droplets.
     * @return mixed
     */
    public function all();

    /**
     * Get a specific droplet or all droplets.
     * @param null $droplet
     * @return mixed
     */
    public function get($droplet);

    /**
     * Create one or multiple droplets.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Get droplets by tag.
     * @param $tag
     * @return mixed
     */
    public function tag($tag);

    /**
     * Get available kernels.
     * @param $droplet
     * @return mixed
     */
    public function kernels($droplet);

    /**
     * Get available snapshots.
     * @param $droplet
     * @return mixed
     */
    public function snapshots($droplet);

    /**
     * Get available backups.
     * @param $droplet
     * @return mixed
     */
    public function backups($droplet);

    /**
     * Get available actions.
     * @param $droplet
     * @return mixed
     */
    public function actions($droplet);

    /**
     * Delete droplet.
     * @param $droplet
     * @return mixed
     */
    public function delete($droplet);

    /**
     * Get neighbors sharing physical hardware.
     * @param $droplet
     * @return mixed
     */
    public function neighbors($droplet);

}