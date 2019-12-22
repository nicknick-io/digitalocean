<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\KubernetesClusterInterface;

class KubernetesClusterRequest extends Request implements KubernetesClusterInterface
{

    /**
     * Get all kubernetes clusters.
     * @return mixed
     */
    public function all()
    {
        // TODO: Implement all() method.
    }

    /**
     * Get a specific kubernetes cluster.
     * @param $cluster
     * @return mixed
     */
    public function get($cluster)
    {
        // TODO: Implement get() method.
    }

    /**
     * Update a kubernetes cluster.
     * @param array $properties
     * @return mixed
     */
    public function update(array $properties = [])
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete a kubernetes cluster.
     * @param $cluster
     * @return mixed
     */
    public function delete($cluster)
    {
        // TODO: Implement delete() method.
    }

    /**
     * Get a kubernetes cluster config.
     * @param $cluster
     * @return mixed
     */
    public function config($cluster)
    {
        // TODO: Implement config() method.
    }

    /**
     * List a specific kubernetes cluster nodes.
     * @param $cluster
     * @return mixed
     */
    public function nodes($cluster)
    {
        // TODO: Implement nodes() method.
    }

    /**
     * Get a specific kubernetes cluster node.
     * @param $cluster
     * @param $node
     * @return mixed
     */
    public function node($cluster, $node)
    {
        // TODO: Implement node() method.
    }

    /**
     * Add a kubernetes cluster node.
     * @param $cluster
     * @return mixed
     */
    public function addNode($cluster)
    {
        // TODO: Implement addNode() method.
    }

    /**
     * Update a kubernetes cluster node.
     * @param $cluster
     * @param $node
     * @param array $attributes
     * @return mixed
     */
    public function updateNode($cluster, $node, array $attributes = [])
    {
        // TODO: Implement updateNode() method.
    }

    /**
     * Delete a kubernetes cluster node.
     * @param $cluster
     * @param $node
     * @return mixed
     */
    public function deleteNode($cluster, $node)
    {
        // TODO: Implement deleteNode() method.
    }

    /**
     * Recycle kubernetes cluster nodes.
     * @param $cluster
     * @param $node
     * @return mixed
     */
    public function recycleNodes($cluster, $node)
    {
        // TODO: Implement recycleNodes() method.
    }

    /**
     * Get all options available for a kubernetes cluster.
     * @return mixed
     */
    public function options()
    {
        // TODO: Implement options() method.
    }

}