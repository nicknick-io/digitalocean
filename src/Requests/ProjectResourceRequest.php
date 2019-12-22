<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\ProjectResourceInterface;

class ProjectResourceRequest extends Request implements ProjectResourceInterface
{

    /**
     * Get all project resources.
     * @param $project
     * @return mixed
     */
    public function all($project)
    {
        $resources = $this->connection->get("/projects/{$project}/resources");
        return $this->load($resources, 'ProjectResource', 'resources');
    }

    /**
     * Assign resources to a project.
     * @param $project
     * @param array $properties
     * @return mixed
     */
    public function assign($project, array $properties = [])
    {
        return $this->connection->post("/projects/{$project}/resources", $properties);
    }

    /**
     * List default project resources.
     * @return mixed
     */
    public function listDefault()
    {
        $resources = $this->connection->get("/projects/default/resources");
        return $this->load($resources, 'ProjectResource', 'resources');
    }

    /**
     * Assign resources to the default project.
     * @param array $properties
     * @return mixed
     */
    public function assignDefault(array $properties = [])
    {
        return $this->connection->post("/projects/default/resources", $properties);
    }

}