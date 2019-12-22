<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\FloatingIPInterface;

class FloatingIPRequest extends Request implements FloatingIPInterface
{

    /**
     * Get all floating ips.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get("/floating_ips");
        return $this->load($resources, 'FloatingIP', 'floating_ips');
    }

    /**
     * Create a floating ip for a droplet.
     * @param $droplet
     * @return mixed
     */
    public function createToDroplet($droplet)
    {
        // TODO: Implement createToDroplet() method.
    }

    /**
     * Create a floating ip for a region.
     * @param $region
     * @return mixed
     */
    public function createToRegion($region)
    {
        // TODO: Implement createToRegion() method.
    }

    /**
     * Get a specific floating ip.
     * @param $ip
     * @return mixed
     */
    public function get($ip)
    {
        $resource = $this->connection->get("/floating_ips/{$ip}");
        return $this->load(['floating_ip' => $resource], 'FloatingIP', 'floating_ip');
    }

    /**
     * Delete a floating ip.
     * @param $ip
     * @return mixed
     */
    public function delete($ip)
    {
        // TODO: Implement delete() method.
    }

}