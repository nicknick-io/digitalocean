<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Connection;
use NickNickIO\Digitalocean\Interfaces\DropletInterface;

class DropletRequest extends Request implements DropletInterface
{

    /**
     * @var DropletActionRequest
     */
    public $action;

    /**
     * DropletRequest constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        parent::__construct($connection);
        $this->action = new DropletActionRequest($connection);
    }

    /**
     * Get a specific droplet or all droplets.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get('/droplets');
        return $this->load($resources, 'Droplet', 'droplets');
    }

    /**
     * Get a specific droplet or all droplets.
     * @param null $droplet
     * @return mixed
     */
    public function get($droplet)
    {
        $resource = $this->connection->get("/droplets/{$droplet}");
        return $this->load(['droplet' => $resource], 'Droplet', 'droplet');
    }

    /**
     * Create one or multiple droplets.
     * @param array $properties
     * @return mixed
     * @throws \Exception
     */
    public function create(array $properties = [])
    {
        $resource = $this->connection->post("/droplets", $properties);
        return $this->load($resource, 'Droplet', 'droplet');
    }

    /**
     * Get droplets by tag.
     * @param $tag
     * @return mixed
     */
    public function tag($tag)
    {
        $resources = $this->connection->get("/droplets?tag_name={$tag}");
        return $this->load($resources, 'Droplet', 'droplets');
    }

    /**
     * Get available kernels.
     * @param $droplet
     * @return mixed
     */
    public function kernels($droplet)
    {
        $resources = $this->connection->get("/droplets/{$droplet}/kernels");
        return $this->load($resources, 'Kernel', 'kernels');
    }

    /**
     * Get available snapshots.
     * @param $droplet
     * @return mixed
     */
    public function snapshots($droplet)
    {
        $resources = $this->connection->get("/droplets/{$droplet}/snapshots");
        return $this->load($resources, 'Snapshot', 'snapshots');
    }

    /**
     * Get available backups.
     * @param $droplet
     * @return mixed
     */
    public function backups($droplet)
    {
        $resources = $this->connection->get("/droplets/{$droplet}/backups");
        return $this->load($resources, 'Backup', 'backups');
    }

    /**
     * Get available actions.
     * @param $droplet
     * @return mixed
     */
    public function actions($droplet)
    {
        $resources = $this->connection->get("/droplets/{$droplet}/actions");
        return $this->load($resources, 'Action', 'actions');
    }

    /**
     * Delete droplet.
     * @param $droplet
     * @return mixed
     */
    public function delete($droplet)
    {
        return $this->connection->delete("/droplets/{$droplet}");
    }

    /**
     * Get neighbors sharing physical hardware.
     * @param $droplet
     * @return mixed
     */
    public function neighbors($droplet)
    {
        $resources = $this->connection->get("/droplets/{$droplet}/neighbors");
        return $this->load($resources, 'Droplet', 'droplets');
    }

}