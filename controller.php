<?php
namespace Concrete\Package\TwitterEmbeddedTimeline;

use Package;
use BlockType;

/*
Twitter Embedded Timeline by Karl Dilkington (aka MrKDilkington)
This software is licensed under the terms described in the concrete5.org marketplace.
Please find the add-on there for the latest license copy.
*/

class Controller extends Package
{
    protected $pkgHandle = 'twitter_embedded_timeline';
    protected $appVersionRequired = '5.7.3';
    protected $pkgVersion = '0.9.7';

    public function getPackageName()
    {
        return t('Twitter Embedded Timeline');
    }

    public function getPackageDescription()
    {
        return t('Add a Twitter embedded timeline widget on your pages.');
    }

    public function install()
    {
        $pkg = parent::install();

        $bt = BlockType::getByHandle('twitter_embedded_timeline');
        if (!is_object($bt)) {
            BlockType::installBlockTypeFromPackage('twitter_embedded_timeline', $pkg);
        }
    }
}
