<?php
namespace NickNickIO\Digitalocean\Rules;

class DropletCreateRule extends Rule
{

    /**
     * Rule properties.
     * @var array
     */
    public $rules = [
        'name' => 'type:string',
        'region' => 'type:string|when:name,test,tester,hans',
        /*'size' => 'type:string',
        'image' => 'type:integer,string',
        'ssh_keys' => 'nullable|type:array',
        'backups' => 'nullable|type:boolean',
        'ipv6' => 'nullable|type:boolean',
        'private_networking' => 'nullable|type:boolean',
        'user_data' => 'nullable|type:string',
        'monitoring' => 'nullable|type:boolean',
        'volumes' => 'nullable|type:array',
        'tags' => 'nullable|type:array',*/
    ];

}