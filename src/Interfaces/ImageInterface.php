<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface ImageInterface
{

    /**
     * Get all images.
     * @return mixed
     */
    public function all();

    /**
     * Get a specific image.
     * @param $image
     * @return mixed
     */
    public function get($image);

    /**
     * Create a custom image.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Update an existing image.
     * @param $image
     * @param array $properties
     * @return mixed
     */
    public function update($image, array $properties = []);

    /**
     * Get all actions for an image.
     * @param $image
     * @return mixed
     */
    public function action($image);

    /**
     * Delete an image.
     * @param $image
     * @return mixed
     */
    public function delete($image);

}