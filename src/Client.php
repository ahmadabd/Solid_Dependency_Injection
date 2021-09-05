<?php

namespace App;

class Client implements CallBack{

    function __construct(private Server $server){}

    public function doSomething()
    {
        return $this->server->doSomethingAsync($this);
    }

    public function oneDoSomethingAsyncDone(){
        return $this->doSomethingTwo();
    }

    public function doSomethingOne()
    {
        return "do something One";
    }

    public function doSomethingTwo()
    {
        return "do something Two";
    }
}