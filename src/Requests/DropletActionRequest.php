<?php
namespace NickNickIO\Digitalocean\Requests;


use NickNickIO\Digitalocean\Interfaces\DropletActionInterface;

class DropletActionRequest extends Request implements DropletActionInterface
{

    /**
     * Enable backups for the droplet.
     * @param $droplet
     * @return array
     */
    public function enableBackups($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'enable_backups',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Disable backups for the droplet.
     * @param $droplet
     * @return array
     */
    public function disableBackups($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'disable_backups',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Reboot a droplet.
     * @param $droplet
     * @return array
     */
    public function reboot($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'reboot',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Power cycle a droplet.
     * @param $droplet
     * @return array
     */
    public function powerCycle($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'power_cycle',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Shutdown a droplet.
     * @param $droplet
     * @return array
     */
    public function shutdown($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'shutdown',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Power off a droplet.
     * @param $droplet
     * @return array
     */
    public function powerOff($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'power_off',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Power on a droplet.
     * @param $droplet
     * @return array
     */
    public function powerOn($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'power_on',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Restore a droplet from an image.
     * @param $droplet
     * @param $image
     * @return array
     */
    public function restore($droplet, $image)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'restore',
            'image' => $image,
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Reset password for a droplet.
     * @param $droplet
     * @return array
     */
    public function resetPassword($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'reset_password',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Resize a droplet.
     * @param $droplet
     * @param $size
     * @param bool $disk
     * @return array
     */
    public function resize($droplet, $size, $disk = true)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'resize',
            'size' => $size,
            'disk' => $disk,
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Rebuild a droplet from an image.
     * @param $droplet
     * @param $image
     * @return array
     */
    public function rebuild($droplet, $image)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'rebuild',
            'image' => $image,
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Rename a droplet.
     * @param $droplet
     * @param $name
     * @return array
     */
    public function rename($droplet, $name)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'rename',
            'name' => $name,
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Change the kernel of a droplet.
     * @param $droplet
     * @param $kernel
     * @return array
     */
    public function kernel($droplet, $kernel)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'change_kernel',
            'kernel' => $kernel
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Enable IPv6 for a droplet.
     * @param $droplet
     * @return array
     */
    public function enableIPv6($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'enable_ipv6',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Enable private networking for a droplet.
     * @param $droplet
     * @return array
     */
    public function enablePrivateNetworking($droplet)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'enable_private_networking',
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

    /**
     * Take a snapshot of a droplet.
     * @param $droplet
     * @param $name
     * @return array
     */
    public function snapshot($droplet, $name)
    {
        $resource = $this->connection->post("/droplets/{$droplet}/actions", [
            'type' => 'snapshot',
            'name' => $name,
        ]);

        return $this->load(['action' => $resource], 'Action', 'action');
    }

}