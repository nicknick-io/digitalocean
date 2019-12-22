<?php
namespace NickNickIO\Digitalocean\Requests;


use NickNickIO\Digitalocean\Interfaces\DatabaseInterface;

class DatabaseRequest extends Request implements DatabaseInterface
{
    /**
     * Get all databases.
     * @return mixed
     */
    public function all()
    {
        // TODO: Implement all() method.
    }

    /**
     * Get a specific database.
     * @param $database
     * @return mixed
     */
    public function get($database)
    {
        // TODO: Implement get() method.
    }

    /**
     * Create a new database.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = [])
    {
        // TODO: Implement create() method.
    }

    /**
     * Resize existing database.
     * @param $database
     * @param $size
     * @param $nodes
     * @return mixed
     */
    public function resize($database, $size, $nodes)
    {
        // TODO: Implement resize() method.
    }

    /**
     * Migrate database to a new region.
     * @param $database
     * @param $region
     * @return mixed
     */
    public function migrate($database, $region)
    {
        // TODO: Implement migrate() method.
    }

    /**
     * Change the maintenance window.
     * @param $database
     * @param $day
     * @param $hour
     * @return mixed
     */
    public function maintenance($database, $day, $hour)
    {
        // TODO: Implement maintenance() method.
    }

    /**
     * Get the backups for a specific database.
     * @param $database
     * @return mixed
     */
    public function backups($database)
    {
        // TODO: Implement backups() method.
    }

    /**
     * Restore a database.
     * @param $database
     * @return mixed
     */
    public function restore($database)
    {
        // TODO: Implement restore() method.
    }

    /**
     * Delete a database.
     * @param $database
     * @return mixed
     */
    public function delete($database)
    {
        // TODO: Implement delete() method.
    }
}