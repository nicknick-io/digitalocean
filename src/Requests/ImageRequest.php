<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Connection;
use NickNickIO\Digitalocean\Interfaces\ImageInterface;

class ImageRequest extends Request implements ImageInterface
{

    /**
     * @var ImageActionRequest
     */
    public $action;

    /**
     * ImageRequest constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        parent::__construct($connection);
        $this->action = new ImageActionRequest($connection);
    }

    /**
     * Get all images.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get('/images');
        return $this->load($resources, 'Image', 'images');
    }

    /**
     * Get a specific image.
     * @param $image
     * @return mixed
     */
    public function get($image)
    {
        $resource = $this->connection->get("/images/{$image}");
        return $this->load(['image' => $resource], 'Image', 'image');
    }

    /**
     * Create a custom image.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = [])
    {
        return $this->connection->post("/images", $properties);
    }

    /**
     * Update an existing image.
     * @param $image
     * @param array $properties
     * @return mixed
     */
    public function update($image, array $properties = [])
    {
        return $this->connection->put("/images/{$image}", $properties);
    }

    /**
     * Get all actions for an image.
     * @param $image
     * @return mixed
     */
    public function action($image)
    {
        $resources = $this->connection->get("/images/{$image}/actions");
        return $this->load($resources, 'Action', 'actions');
    }

    /**
     * Delete an image.
     * @param $image
     * @return mixed
     */
    public function delete($image)
    {
        return $this->connection->delete("/images/{$image}");
    }

}