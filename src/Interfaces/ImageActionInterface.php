<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface ImageActionInterface
{

    /**
     * Transfer an image to another region.
     * @param $image
     * @param $region
     * @return mixed
     */
    public function transfer($image, $region);

    /**
     * Convert an image to a snapshot.
     * @param $image
     * @return mixed
     */
    public function convert($image);

    /**
     * Get a specific action.
     * @param $image
     * @param $action
     * @return mixed
     */
    public function action($image, $action);

}