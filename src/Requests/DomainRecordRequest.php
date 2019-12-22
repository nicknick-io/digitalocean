<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\DomainRecordInterface;

class DomainRecordRequest extends Request implements DomainRecordInterface
{

    /**
     * Get all domain records.
     * @param $domain
     * @return mixed
     */
    public function all($domain)
    {
        $resources = $this->connection->get("/domains/{$domain}/records");
        return $this->load($resources, 'DomainRecord', 'domain_records');
    }

    /**
     * Get a specific domain record.
     * @param $domain
     * @param $record
     * @return mixed
     */
    public function get($domain, $record)
    {
        $resource = $this->connection->get("/domains/{$domain}/records/{$record}");
        return $this->load(['domain_record' => $resource], 'DomainRecord', 'domain_record');
    }

    /**
     * Create a new domain record.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = [])
    {
        // TODO: Implement create() method.
    }

    /**
     * Update a domain record
     * @param $domain
     * @param $record
     * @param array $properties
     * @return mixed
     */
    public function update($domain, $record, array $properties = [])
    {
        // TODO: Implement update() method.
    }

    /**
     * Delete a domain record.
     * @param $domain
     * @param $record
     * @return mixed
     */
    public function delete($domain, $record)
    {
        // TODO: Implement delete() method.
    }
}