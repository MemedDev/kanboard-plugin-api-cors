<?php

namespace Kanboard\Plugin\ApiCors;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
    }

    public function getPluginName()
    {
        return 'API Cors';
    }

    public function getPluginDescription()
    {
        return t('Enable CORS for JSONRPC API.');
    }

    public function getPluginAuthor()
    {
        return 'Memed SA';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://kanboard.net/plugin/api-cors';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.40';
    }
}
