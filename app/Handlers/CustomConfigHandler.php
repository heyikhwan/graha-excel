<?php

namespace App\Handlers;

use UniSharp\LaravelFilemanager\Handlers\ConfigHandler;

class CustomConfigHandler extends ConfigHandler
{
    public function userField()
    {
        return 1;
    }
}
