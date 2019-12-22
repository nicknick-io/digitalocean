<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface CertificateInterface
{

    /**
     * Get all certificates.
     * @return mixed
     */
    public function all();

    /**
     * Create a new certificate.
     * @param array $properties
     * @return mixed
     */
    public function create(array $properties = []);

    /**
     * Get a specific certificate.
     * @param $certificate
     * @return mixed
     */
    public function get($certificate);

    /**
     * Delete a certificate.
     * @param $certificate
     * @return mixed
     */
    public function delete($certificate);

}