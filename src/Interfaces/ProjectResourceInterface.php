<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface ProjectResourceInterface
{

    /**
     * Get all project resources.
     * @param $project
     * @return mixed
     */
    public function all($project);

    /**
     * Assign resources to a project.
     * @param $project
     * @param array $properties
     * @return mixed
     */
    public function assign($project, array $properties = []);

    /**
     * List default project resources.
     * @return mixed
     */
    public function listDefault();

    /**
     * Assign resources to the default project.
     * @param array $properties
     * @return mixed
     */
    public function assignDefault(array $properties = []);

}