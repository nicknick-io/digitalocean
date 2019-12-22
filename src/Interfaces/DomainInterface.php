<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface DomainInterface
{

    /**
     * Get all domains.
     * @return mixed
     */
    public function all();

    /**
     * Get a specific domain.
     * @param $domain
     * @return mixed
     */
    public function get($domain);

    /**
     * Get all domain records.
     * @param $domain
     * @return mixed
     */
    public function records($domain);

    /**
     * Create a new domain.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Delete a domain.
     * @param $domain
     * @return mixed
     */
    public function delete($domain);

}