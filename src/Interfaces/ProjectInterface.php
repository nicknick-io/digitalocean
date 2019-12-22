<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface ProjectInterface
{

    /**
     * Get all projects.
     * @return mixed
     */
    public function all();

    /**
     * Create a project.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Update a project.
     * @param $project
     * @param array $properties
     * @return mixed
     */
    public function update($project, array $properties = []);

    /**
     * Patch a project.
     * @param $project
     * @param array $properties
     * @return mixed
     */
    public function patch($project, array $properties = []);

    /**
     * Get a specific project
     * @param $project
     * @return mixed
     */
    public function get($project);

}