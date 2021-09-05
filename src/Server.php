<?php 

namespace App;

class Server {

    public function doSomethingAsync($callback)
    {
        return $callback->oneDoSomethingAsyncDone();
    }
}