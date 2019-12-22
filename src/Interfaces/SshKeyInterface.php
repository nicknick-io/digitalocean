<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface SshKeyInterface
{

    /**
     * Get all ssh keys.
     * @return mixed
     */
    public function all();

    /**
     * Get a ssh key.
     * @param $ssh_key
     * @return mixed
     */
    public function get($ssh_key);

    /**
     * Create a ssh key.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Update a ssh key.
     * @param $ssh_key
     * @param array $properties
     * @return mixed
     */
    public function update($ssh_key, array $properties = []);

    /**
     * Delete a ssh key.
     * @param $ssh_key
     * @return mixed
     */
    public function delete($ssh_key);

}