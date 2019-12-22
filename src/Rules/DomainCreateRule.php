<?php
namespace NickNickIO\Digitalocean\Rules;

class DomainCreateRule extends Rule
{

    /**
     * Required properties.
     * @var array
     */
    public $required = [
        'name' => 'string',
    ];

    /**
     * Optional properties.
     * @var array
     */
    public $optional = [
        'ip_address' => 'string',
    ];

}