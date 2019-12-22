<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\FirewallInterface;

class FirewallRequest extends Request implements FirewallInterface
{

    /**
     * Get all firewalls.
     * @return array
     */
    public function all()
    {
        $resources = $this->connection->get("/firewalls");
        return $this->load($resources, 'Firewall', 'firewalls');
    }

    /**
     * Get a specific firewall.
     * @param $firewall
     * @return mixed
     */
    public function get($firewall)
    {
        $resource = $this->connection->get("/firewalls/{$firewall}");
        return $this->load(['firewall' => $resource], 'Firewall', 'firewall');
    }

    /**
     * Update a firewall.
     * @param $firewall
     * @param array $properties
     * @return mixed
     */
    public function update($firewall, array $properties = [])
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete a firewall.
     * @param $firewall
     * @return mixed
     */
    public function delete($firewall)
    {
        // TODO: Implement delete() method.
    }

    /**
     * Add droplets to a firewall.
     * @param $firewall
     * @param array $droplets
     * @return mixed
     */
    public function addDroplets($firewall, array $droplets = [])
    {
        // TODO: Implement addDroplets() method.
    }

    /**
     * Remove droplets from a firewall.
     * @param $firewall
     * @param array $droplets
     * @return mixed
     */
    public function removeDroplets($firewall, array $droplets = [])
    {
        // TODO: Implement removeDroplets() method.
    }

    /**
     * Add tags to a firewall.
     * @param $firewall
     * @param array $tags
     * @return mixed
     */
    public function addTags($firewall, array $tags = [])
    {
        // TODO: Implement addTags() method.
    }

    /**
     * Remove tags from a firewall.
     * @param $firewall
     * @param array $tags
     * @return mixed
     */
    public function removeTags($firewall, array $tags = [])
    {
        // TODO: Implement removeTags() method.
    }

    /**
     * Add rules to a firewall.
     * @param $firewall
     * @param array $rules
     * @return mixed
     */
    public function addRules($firewall, array $rules = [])
    {
        // TODO: Implement addRules() method.
    }

    /**
     * Remove rules from a firewall.
     * @param $firewall
     * @param array $rules
     * @return mixed
     */
    public function removeRules($firewall, array $rules = [])
    {
        // TODO: Implement removeRules() method.
    }

}