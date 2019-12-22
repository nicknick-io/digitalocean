<?php
namespace NickNickIO\Digitalocean\Requests;


use NickNickIO\Digitalocean\Interfaces\RegionInterface;

class RegionRequest extends Request implements RegionInterface
{

    /**
     * Get all regions.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get('/regions');
        return $this->load($resources, 'Region', 'regions');
    }

}