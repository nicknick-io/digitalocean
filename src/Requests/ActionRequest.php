<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\ActionInterface;

class ActionRequest extends Request implements ActionInterface
{

    /**
     * Get all actions.
     * @return array
     */
    public function all()
    {
        $resources = $this->connection->get("/actions");
        return $this->load($resources, 'Action', 'actions');
    }

    /**
     * Get a specific action.
     * @param $id
     * @return array
     */
    public function get($id)
    {
        $resource = $this->connection->get("/actions/{$id}");
        return $this->load(['action' => $resource], 'Action', 'action');
    }

}