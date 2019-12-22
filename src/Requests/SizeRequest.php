<?php
namespace NickNickIO\Digitalocean\Requests;

class SizeRequest extends Request
{
    
    /**
     * Get all sizes.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get('/sizes');
        return $this->load($resources, 'Size', 'sizes');
    }

}