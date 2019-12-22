<?php
namespace NickNickIO\Digitalocean\Rules;

class ImageCreateRule extends Rule
{

    /**
     * Required properties
     * @var array
     */
    public $required = [
        'name' => 'string',
        'url' => 'string',
        'region' => 'string',
    ];


    /**
     * Optional properties.
     * @var array
     */
    public $optional = [
        'distribution' => 'string',
        'description' => 'string',
        'tags' => 'array',
    ];

}