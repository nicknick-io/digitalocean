<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface DatabaseInterface
{

    /**
     * Get all databases.
     * @return mixed
     */
    public function all();

    /**
     * Get a specific database.
     * @param $database
     * @return mixed
     */
    public function get($database);

    /**
     * Create a new database.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Resize existing database.
     * @param $database
     * @param $size
     * @param $nodes
     * @return mixed
     */
    public function resize($database, $size, $nodes);

    /**
     * Migrate database to a new region.
     * @param $database
     * @param $region
     * @return mixed
     */
    public function migrate($database, $region);

    /**
     * Change the maintenance window.
     * @param $database
     * @param $day
     * @param $hour
     * @return mixed
     */
    public function maintenance($database, $day, $hour);

    /**
     * Get the backups for a specific database.
     * @param $database
     * @return mixed
     */
    public function backups($database);

    /**
     * Restore a database.
     * @param $database
     * @return mixed
     */
    public function restore($database);

    /**
     * Delete a database.
     * @param $database
     * @return mixed
     */
    public function delete($database);

}