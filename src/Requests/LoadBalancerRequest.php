<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\LoadBalancerInterface;

class LoadBalancerRequest extends Request implements LoadBalancerInterface
{

    /**
     * Get all load balancers.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get('/load_balancers');
        return $this->load($resources, 'LoadBalancer', 'load_balancers');
    }

    /**
     * Create a load balancer.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = [])
    {
        return $this->connection->post('/load_balancers', $properties);
    }

    /**
     * Get a specific load balancer.
     * @param $load_balancer
     * @return mixed
     */
    public function get($load_balancer)
    {
        $resource = $this->connection->get("/load_balancers/{$load_balancer}");
        return $this->load(['load_balancer' => $resource], 'LoadBalancer', 'load_balancer');
    }

    /**
     * Update a load balancer.
     * @param $load_balancer
     * @param array $properties
     * @return mixed
     */
    public function update($load_balancer, array $properties = [])
    {
        return $this->connection->put("/load_balancers/{$load_balancer}", $properties);
    }

    /**
     * Delete a load balancer.
     * @param $load_balancer
     * @return mixed
     */
    public function delete($load_balancer)
    {
        return $this->connection->delete("/load_balancers/{$load_balancer}");
    }

    /**
     * Add droplets to a load balancer.
     * @param $load_balancer
     * @param array $properties
     * @return mixed
     */
    public function addDroplets($load_balancer, array $properties = [])
    {
        return $this->connection->post("/load_balancers/{$load_balancer}", $properties);
    }

    /**
     * Remove droplet from a load balancer.
     * @param $load_balancer
     * @param array $properties
     * @return mixed
     */
    public function removeDroplets($load_balancer, array $properties = [])
    {
        return $this->connection->delete("/load_balancers/{$load_balancer}", $properties);
    }

    /**
     * Add a rule to a load balancer.
     * @param $load_balancer
     * @param array $properties
     * @return mixed
     */
    public function addRules($load_balancer, array $properties = [])
    {
        return $this->connection->post("/load_balancers/{$load_balancer}/forwarding_rules", $properties);
    }

    /**
     * Delete a rule from a load balancer.
     * @param $load_balancer
     * @param array $properties
     * @return mixed
     */
    public function deleteRules($load_balancer, array $properties = [])
    {
        return $this->connection->delete("/load_balancers/{$load_balancer}/forwarding_rules", $properties);
    }
}