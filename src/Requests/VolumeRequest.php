<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\VolumeInterface;

class VolumeRequest extends Request implements VolumeInterface
{

    /**
     * Get all volumes.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get('/volumes');
        return $this->load($resources, 'Volume', 'volumes');
    }

    /**
     * Create a new volume.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties)
    {
        // TODO: Implement create() method.
    }

    /**
     * Get a specific volume.
     * @param $volume
     * @return mixed
     */
    public function get($volume)
    {
        $resource = $this->connection->get("/volumes/{$volume}");
        return $this->load(['volume' => $resource], 'Volume', 'volume');
    }

    /**
     * Get all volumes in a specific region.
     * @param $region
     * @return mixed
     */
    public function region($region)
    {
        $resources = $this->connection->get("/volumes?region={$region}");
        return $this->load($resources, 'Volume', 'volumes');
    }

    /**
     * Get all snapshots.
     * @param $volume
     * @return mixed
     */
    public function snapshots($volume)
    {
        $resources = $this->connection->get("/volumes/{$volume}/snapshots");
        return $this->load($resources, 'Snapshot', 'snapshots');
    }

    /**
     * Delete volume.
     * @param $volume
     * @return mixed
     */
    public function delete($volume)
    {
        // TODO: Implement delete() method.
    }

    /**
     * Attach volume to droplet.
     * @param $volume
     * @param $droplet
     * @return mixed
     */
    public function attach($volume, $droplet)
    {
        return $this->connection->post("/volumes/{$volume}/actions", [
            'type' => 'attach',
            'droplet_id' => $droplet,
        ]);
    }

    /**
     * Detach volume from a droplet.
     * @param $volume
     * @param $droplet
     * @return mixed
     */
    public function detach($volume, $droplet)
    {
        return $this->connection->post("/volumes/{$volume}/actions", [
            'type' => 'detach',
            'droplet_id' => $droplet,
        ]);
    }

    /**
     * Resize a volume.
     * @param $volume
     * @param $size
     * @return mixed
     */
    public function resize($volume, $size)
    {
        return $this->connection->post("/volumes/{$volume}/actions", [
            'type' => 'resize',
            'size_gigabytes' => $size,
        ]);
    }

    /**
     * Get actions for a specific volume.
     * @param $volume
     * @return mixed
     */
    public function actions($volume)
    {
        $resources = $this->connection->get("/volumes/{$volume}/actions");
        return $this->load($resources, 'Action', 'actions');
    }

    /**
     * Get an action.
     * @param $volume
     * @param $action
     * @return mixed
     */
    public function action($volume, $action)
    {
        $resource = $this->connection->get("/volumes/{$volume}/actions/{$action}");
        return $this->load(['action' => $resource], 'Action', 'action');
    }

}