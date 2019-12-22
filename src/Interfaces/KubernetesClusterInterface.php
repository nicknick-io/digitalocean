<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface KubernetesClusterInterface
{

    /**
     * Get all kubernetes clusters.
     * @return mixed
     */
    public function all();

    /**
     * Get a specific kubernetes cluster.
     * @param $cluster
     * @return mixed
     */
    public function get($cluster);

    /**
     * Update a kubernetes cluster.
     * @param array $properties
     * @return mixed
     */
    public function update(array $properties = []);

    /**
     * Delete a kubernetes cluster.
     * @param $cluster
     * @return mixed
     */
    public function delete($cluster);

    /**
     * Get a kubernetes cluster config.
     * @param $cluster
     * @return mixed
     */
    public function config($cluster);

    /**
     * List a specific kubernetes cluster nodes.
     * @param $cluster
     * @return mixed
     */
    public function nodes($cluster);

    /**
     * Get a specific kubernetes cluster node.
     * @param $cluster
     * @param $node
     * @return mixed
     */
    public function node($cluster, $node);

    /**
     * Add a kubernetes cluster node.
     * @param $cluster
     * @return mixed
     */
    public function addNode($cluster);

    /**
     * Update a kubernetes cluster node.
     * @param $cluster
     * @param $node
     * @param array $attributes
     * @return mixed
     */
    public function updateNode($cluster, $node, array $attributes = []);

    /**
     * Delete a kubernetes cluster node.
     * @param $cluster
     * @param $node
     * @return mixed
     */
    public function deleteNode($cluster, $node);

    /**
     * Recycle kubernetes cluster nodes.
     * @param $cluster
     * @param $node
     * @return mixed
     */
    public function recycleNodes($cluster, $node);

    /**
     * Get all options available for a kubernetes cluster.
     * @return mixed
     */
    public function options();

}