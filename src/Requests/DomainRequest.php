<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\DomainInterface;
use NickNickIO\Digitalocean\Rules\DomainCreateRule;

class DomainRequest extends Request implements DomainInterface
{

    /**
     * Get all domains.
     * @return array|mixed
     */
    public function all()
    {
        $resources = $this->connection->get("/domains");
        return $this->load($resources, 'Domain', 'domains');
    }

    /**
     * Get a specific domain.
     * @param $domain
     * @return array
     */
    public function get($domain)
    {
        $resource = $this->connection->get("/domains/{$domain}");
        return $this->load(['domain' => $resource], 'Domain', 'domain');
    }

    /**
     * Get all domain records.
     * @param $domain
     * @return mixed
     */
    public function records($domain)
    {
        $resources = $this->connection->get("/domains/{$domain}/records");
        return $this->load($resources, 'DomainRecord', 'domain_records');
    }

    /**
     * Create a new domain.
     * @param array $properties
     * @return mixed
     * @throws \Exception
     */
    public function create(array $properties = [])
    {
        $resource = $this->connection->post("/domains", $properties);
        return $this->load(['domain' => $resource], 'Domain', 'domain');
    }

    /**
     * Delete a domain.
     * @param $domain
     * @return mixed
     */
    public function delete($domain)
    {
        return $this->connection->delete("/domains/{$domain}");
    }
}