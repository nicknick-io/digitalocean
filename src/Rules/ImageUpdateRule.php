<?php
namespace NickNickIO\Digitalocean\Rules;

class ImageUpdateRule extends Rule
{

    /**
     * Required properties
     * @var array
     */
    public $required = [];


    /**
     * Optional properties.
     * @var array
     */
    public $optional = [
        'name' => 'string',
        'description' => 'string',
        'distribution' => 'string',
    ];

}