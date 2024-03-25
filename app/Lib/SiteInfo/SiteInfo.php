<?php

namespace App\Lib\SiteInfo;

use App\Lib\SiteInfo\Server;
use App\Lib\SiteInfo\Database;
use App\Lib\SiteInfo\Application;

class SiteInfo
{
    public function application() {
        return (new Application())->getInfo();
    }

    public function server() {
        return (new Server())->getInfo();
    }

    public function database() {
        return (new Database())->getInfo();
    }
}