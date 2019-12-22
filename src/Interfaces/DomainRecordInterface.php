<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface DomainRecordInterface
{

    /**
     * Get all domain records.
     * @param $domain
     * @return mixed
     */
    public function all($domain);

    /**
     * Get a specific domain record.
     * @param $domain
     * @param $record
     * @return mixed
     */
    public function get($domain, $record);

    /**
     * Create a new domain record.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Update a domain record
     * @param $domain
     * @param $record
     * @param array $properties
     * @return mixed
     */
    public function update($domain, $record, array $properties = []);

    /**
     * Delete a domain record.
     * @param $domain
     * @param $record
     * @return mixed
     */
    public function delete($domain, $record);

}