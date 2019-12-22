<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\ImageActionInterface;

class ImageActionRequest extends Request implements ImageActionInterface
{

    /**
     * Transfer an image to another region.
     * @param $image
     * @param $region
     * @return mixed
     */
    public function transfer($image, $region)
    {
        // TODO: Implement transfer() method.
    }

    /**
     * Convert an image to a snapshot.
     * @param $image
     * @return mixed
     */
    public function convert($image)
    {
        // TODO: Implement convert() method.
    }

    /**
     * Get a specific action.
     * @param $image
     * @param $action
     * @return mixed
     */
    public function action($image, $action)
    {
        // TODO: Implement action() method.
    }
}