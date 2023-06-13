<?php

use Ti\Smartfarming\Routers;
require __DIR__ . '/bootstrap.php';

class Dispatcher
{
    public Routers $router;
    

    public function __construct(){
        $this->router = new Routers();
        new Ti\Smartfarming\Database\Database();
    }

    public function run(): void
    {

        try {
            require __DIR__ . '/../routes/web.php';
        } catch (\Exception $e) {
            echo "Error Message ".$e->getMessage();
        }
    }





}