<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface FloatingIPInterface
{

    /**
     * Get all floating ips.
     * @return mixed
     */
    public function all();

    /**
     * Create a floating ip for a droplet.
     * @param $droplet
     * @return mixed
     */
    public function createToDroplet($droplet);

    /**
     * Create a floating ip for a region.
     * @param $region
     * @return mixed
     */
    public function createToRegion($region);

    /**
     * Get a specific floating ip.
     * @param $ip
     * @return mixed
     */
    public function get($ip);

    /**
     * Delete a floating ip.
     * @param $ip
     * @return mixed
     */
    public function delete($ip);

}