<?php
namespace NickNickIO\Digitalocean\Rules;

class DomainRecordCreateRule extends Rule
{

    /**
     * Required properties.
     * @var array
     */
    public $rules = [
        'type' => 'type:string',
        'name' => 'type:string|when:type,A,AAAA,CAA,CNAME,TXT,SRV',
        'data' => 'type:string|when:type,A,AAAA,CAA,CNAME,MX,TXT,SRV,NS',
        'priority' => 'nullable|type:integer|when:type,MX,SRV',
        'port' => 'nullable|type:integer|when:type,SRV',
        'ttl' => 'type:integer',
        'weight' => 'nullable|type:integer|when:type,SRV',
        'flags' => 'nullable|type:integer|when:type,CAA',
        'tag' => 'type:string|when:type,CAA'
    ];

}