<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\ProjectInterface;

class ProjectRequest extends Request implements ProjectInterface
{

    /**
     * Get all projects.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get("/projects");
        return $this->load($resources, 'Project', 'projects');
    }

    /**
     * Get a specific project
     * @param $project
     * @return mixed
     */
    public function get($project)
    {
        $resource = $this->connection->get("/projects/{$project}");
        return $this->load(['project' => $resource], 'Project', 'project');
    }

    /**
     * Create a project.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = [])
    {
        return $this->connection->post("/projects", $properties);
    }

    /**
     * Update a project.
     * @param $project
     * @param array $properties
     * @return mixed
     */
    public function update($project, array $properties = [])
    {
        return $this->connection->put("/projects/{$project}", $properties);
    }

    /**
     * Patch a project.
     * @param $project
     * @param array $properties
     * @return mixed
     */
    public function patch($project, array $properties = [])
    {
        return $this->connection->patch("/projects/{$project}", $properties);
    }

}