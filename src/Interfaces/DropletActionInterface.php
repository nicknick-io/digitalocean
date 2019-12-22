<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface DropletActionInterface
{

    /**
     * Enable backups for the droplet.
     * @param $droplet
     */
    public function enableBackups($droplet);

    /**
     * Disable backups for the droplet.
     * @param $droplet
     */
    public function disableBackups($droplet);

    /**
     * Reboot a droplet.
     * @param $droplet
     */
    public function reboot($droplet);

    /**
     * Power cycle a droplet.
     * @param $droplet
     */
    public function powerCycle($droplet);

    /**
     * Shutdown a droplet.
     * @param $droplet
     */
    public function shutdown($droplet);

    /**
     * Power off a droplet.
     * @param $droplet
     */
    public function powerOff($droplet);

    /**
     * POwer on a droplet.
     * @param $droplet
     */
    public function powerOn($droplet);

    /**
     * Restore a droplet from an image.
     * @param $droplet
     * @param $image
     */
    public function restore($droplet, $image);

    /**
     * Reset password for a droplet.
     * @param $droplet
     */
    public function resetPassword($droplet);

    /**
     * Resize a droplet.
     * @param $droplet
     * @param $size
     * @param bool $disk
     */
    public function resize($droplet, $size, $disk = true);

    /**
     * Rebuild a droplet from an image.
     * @param $droplet
     * @param $image
     */
    public function rebuild($droplet, $image);

    /**
     * Rename a droplet.
     * @param $droplet
     * @param $name
     */
    public function rename($droplet, $name);

    /**
     * Change the kernel of a droplet.
     * @param $droplet
     * @param $kernel
     */
    public function kernel($droplet, $kernel);

    /**
     * Enable IPv6 for a droplet.
     * @param $droplet
     */
    public function enableIPv6($droplet);

    /**
     * Enable private networking for a droplet.
     * @param $droplet
     */
    public function enablePrivateNetworking($droplet);

    /**
     * Take a snapshot of a droplet.
     * @param $droplet
     * @param $name
     */
    public function snapshot($droplet, $name);

}