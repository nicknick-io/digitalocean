<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\SshKeyInterface;

class SshKeyRequest extends Request implements SshKeyInterface
{

    /**
     * Get all ssh keys.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get("/ssh_keys");
        return $this->load($resources, 'SshKey', 'ssh_keys');
    }

    /**
     * Get a ssh key.
     * @param $ssh_key
     * @return mixed
     */
    public function get($ssh_key)
    {
        $resource = $this->connection->get("/ssh_keys/{$ssh_key}");
        return $this->load(['ssh_key' => $resource], 'SshKey', 'ssh_key');
    }

    /**
     * Create a ssh key.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = [])
    {
        return $this->connection->post("/ssh_keys", $properties);
    }

    /**
     * Update a ssh key.
     * @param $ssh_key
     * @param array $properties
     * @return mixed
     */
    public function update($ssh_key, array $properties = [])
    {
        return $this->connection->put("/ssh_keys", $properties);
    }

    /**
     * Delete a ssh key.
     * @param $ssh_key
     * @return mixed
     */
    public function delete($ssh_key)
    {
        return $this->connection->delete("/ssh_keys/{$ssh_key}");
    }

}