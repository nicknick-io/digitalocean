<?php
namespace NickNickIO\Digitalocean\Requests;


use NickNickIO\Digitalocean\Interfaces\SnapshotInterface;

class SnapshotRequest extends Request implements SnapshotInterface
{

    /**
     * Get all snapshots.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get("/snapshots");
        return $this->load($resources, 'Snapshot', 'snapshots');
    }

    /**
     * Get a snapshot.
     * @param $snapshot
     * @return mixed
     */
    public function get($snapshot)
    {
        $resource = $this->connection->get("/snapshots/{$snapshot}");
        return $this->load(['snapshot' => $resource], 'Snapshot', 'snapshot');
    }

    /**
     * Get all droplet snapshots.
     * @return mixed
     */
    public function droplet()
    {
        $resources = $this->connection->get("/snapshots?resource_type=droplet");
        return $this->load($resources, 'Snapshot', 'snapshots');
    }

    /**
     * Get all volume snapshots.
     * @return mixed
     */
    public function volume()
    {
        $resources = $this->connection->get("/snapshots?resource_type=volume");
        return $this->load($resources, 'Snapshot', 'snapshots');
    }

    /**
     * Delete a snapshot.
     * @param $snapshot
     * @return mixed
     */
    public function delete($snapshot)
    {
        return $this->connection->delete("/snapshots/{$snapshot}");
    }

}