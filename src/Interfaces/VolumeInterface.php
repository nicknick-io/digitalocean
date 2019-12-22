<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface VolumeInterface
{

    /**
     * Get all volumes.
     * @return mixed
     */
    public function all();

    /**
     * Get a specific volume.
     * @param $volume
     * @return mixed
     */
    public function get($volume);

    /**
     * Get all volumes in a specific region.
     * @param $region
     * @return mixed
     */
    public function region($region);

    /**
     * Create a new volume.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties);

    /**
     * Get all snapshots.
     * @param $volume
     * @return mixed
     */
    public function snapshots($volume);

    /**
     * Delete volume.
     * @param $volume
     * @return mixed
     */
    public function delete($volume);

    /**
     * Attach volume to droplet.
     * @param $volume
     * @param $droplet
     * @return mixed
     */
    public function attach($volume, $droplet);

    /**
     * Detach volume from a droplet.
     * @param $volume
     * @param $droplet
     * @return mixed
     */
    public function detach($volume, $droplet);

    /**
     * Resize a volume.
     * @param $volume
     * @param $size
     * @return mixed
     */
    public function resize($volume, $size);

    /**
     * Get actions for a specific volume.
     * @param $volume
     * @return mixed
     */
    public function actions($volume);

    /**
     * Get an action.
     * @param $volume
     * @param $action
     * @return mixed
     */
    public function action($volume, $action);

}