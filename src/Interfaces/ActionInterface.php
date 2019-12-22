<?php
namespace NickNickIO\Digitalocean\Interfaces;

interface ActionInterface
{
    public function all();

    public function get($id);
}