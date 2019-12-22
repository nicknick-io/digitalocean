<?php
namespace NickNickIO\Digitalocean\Rules;

class CertificateCreateRule extends Rule
{

    /**
     * Required properties.
     * @var array
     */
    public $required = [
        'name' => 'string',
        'type' => 'string',
    ];

    /**
     * Optional properties.
     * @var array
     */
    public $optional = [
        'private_key' => 'string',
        'leaf_certificate' => 'string',
        'certificate_chain' => 'string',
        'dns_names' => 'array',
    ];

}