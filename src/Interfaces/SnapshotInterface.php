<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface SnapshotInterface
{

    /**
     * Get all snapshots.
     * @return mixed
     */
    public function all();

    /**
     * Get a snapshot.
     * @param $snapshot
     * @return mixed
     */
    public function get($snapshot);

    /**
     * Get all droplet snapshots.
     * @return mixed
     */
    public function droplet();

    /**
     * Get all volume snapshots.
     * @return mixed
     */
    public function volume();

    /**
     * Delete a snapshot.
     * @param $snapshot
     * @return mixed
     */
    public function delete($snapshot);

}