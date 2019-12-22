<?php
namespace NickNickIO\Digitalocean\Requests;

use NickNickIO\Digitalocean\Interfaces\CertificateInterface;
use NickNickIO\Digitalocean\Rules\CertificateCreateRule;

class CertificateRequest extends Request implements CertificateInterface
{

    /**
     * Get all certificates.
     * @return mixed
     */
    public function all()
    {
        $resources = $this->connection->get("/certificates");
        return $this->load($resources, 'Certificate', 'certificates');
    }

    /**
     * Create a new certificate.
     * @param array $properties
     * @return mixed
     * @throws \Exception
     */
    public function create(array $properties = [])
    {
        $resource = $this->connection->post('/certificates', $properties);
        return $this->load(['certificate' => $resource], 'Certificate', 'certificate');
    }

    /**
     * Get a specific certificate.
     * @param $certificate
     * @return mixed
     */
    public function get($certificate)
    {
        $resource = $this->connection->get("/certificates/{$certificate}");
        return $this->load(['certificate' => $resource], 'Certificate', 'certificate');
    }

    /**
     * Delete a certificate.
     * @param $certificate
     * @return mixed
     */
    public function delete($certificate)
    {
        return $this->connection->delete("/certificates/{$certificate}");
    }
}