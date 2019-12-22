<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface LoadBalancerInterface
{

    /**
     * Get all load balancers.
     * @return mixed
     */
    public function all();

    /**
     * Create a load balancer.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Get a specific load balancer.
     * @param $load_balancer
     * @return mixed
     */
    public function get($load_balancer);

    /**
     * Update a load balancer.
     * @param $load_balancer
     * @param array $properties
     * @return mixed
     */
    public function update($load_balancer, array $properties = []);

    /**
     * Delete a load balancer.
     * @param $load_balancer
     * @return mixed
     */
    public function delete($load_balancer);

    /**
     * Add droplets to a load balancer.
     * @param $load_balancer
     * @param array $droplets
     * @return mixed
     */
    public function addDroplets($load_balancer, array $droplets = []);

    /**
     * Remove droplet from a load balancer.
     * @param $load_balancer
     * @param array $droplets
     * @return mixed
     */
    public function removeDroplets($load_balancer, array $droplets = []);

    /**
     * Add a rule to a load balancer.
     * @param $load_balancer
     * @param array $properties
     * @return mixed
     */
    public function addRules($load_balancer, array $properties = []);

    /**
     * Delete a rule from a load balancer.
     * @param $load_balancer
     * @param array $properties
     * @return mixed
     */
    public function deleteRules($load_balancer, array $properties = []);

}