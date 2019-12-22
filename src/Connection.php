<?php
namespace NickNickIO\Digitalocean;

use Zttp\Zttp;

class Connection
{

    protected $zttp;

    public $uri = 'https://api.digitalocean.com/v2';

    public $key = '';

    public function __construct($key)
    {
        $this->key = $key;
        $this->zttp = Zttp::withHeaders([
            'Authorization' => "Bearer {$this->key}"
        ]);
    }

    public function get($uri)
    {
        return $this->zttp->get($this->uri . $uri)->json();
    }

    public function delete($uri, array $attributes = [])
    {
        return $this->zttp->delete($this->uri . $uri, $attributes)->json();
    }

    public function put($uri, array $attributes = [])
    {
        return $this->zttp->put($this->uri . $uri, $attributes)->json();
    }

    public function post($uri, array $attributes = [])
    {
        return $this->zttp->post($this->uri . $uri, $attributes)->json();
    }

    public function patch($uri, array $attributes = [])
    {
        return $this->zttp->patch($this->uri . $uri, $attributes)->json();
    }

    public function head($uri)
    {
        return $this->zttp->head($this->uri . $uri)->json();
    }

}