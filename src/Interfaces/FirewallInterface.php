<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface FirewallInterface
{

    /**
     * Get all firewalls.
     * @return mixed
     */
    public function all();

    /**
     * Get a specific firewall.
     * @param $firewall
     * @return mixed
     */
    public function get($firewall);

    /**
     * Update a firewall.
     * @param $firewall
     * @param array $properties
     * @return mixed
     */
    public function update($firewall, array $properties = []);

    /**
     * Delete a firewall.
     * @param $firewall
     * @return mixed
     */
    public function delete($firewall);

    /**
     * Add droplets to a firewall.
     * @param $firewall
     * @param array $droplets
     * @return mixed
     */
    public function addDroplets($firewall, array $droplets = []);

    /**
     * Remove droplets from a firewall.
     * @param $firewall
     * @param array $droplets
     * @return mixed
     */
    public function removeDroplets($firewall, array $droplets = []);

    /**
     * Add tags to a firewall.
     * @param $firewall
     * @param array $tags
     * @return mixed
     */
    public function addTags($firewall, array $tags = []);

    /**
     * Remove tags from a firewall.
     * @param $firewall
     * @param array $tags
     * @return mixed
     */
    public function removeTags($firewall, array $tags = []);

    /**
     * Add rules to a firewall.
     * @param $firewall
     * @param array $rules
     * @return mixed
     */
    public function addRules($firewall, array $rules = []);

    /**
     * Remove rules from a firewall.
     * @param $firewall
     * @param array $rules
     * @return mixed
     */
    public function removeRules($firewall, array $rules = []);

}