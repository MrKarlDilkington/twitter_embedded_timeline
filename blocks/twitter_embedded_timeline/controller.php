<?php
namespace Concrete\Package\TwitterEmbeddedTimeline\Block\TwitterEmbeddedTimeline;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btInterfaceHeight = 560;
    protected $btInterfaceWidth = 450;
    protected $btCacheBlockOutput = true;
    protected $btTable = 'btTwitterEmbeddedTimeline';
    protected $btDefaultSet = 'social';

    public function getBlockTypeName()
    {
        return t('Twitter Embedded Timeline');
    }

    public function getBlockTypeDescription()
    {
        return t('Add a Twitter timeline widget on your pages.');
    }

    public function save($args)
    {
        $args['tweetsDisplayed'] = intval($args['tweetsDisplayed']);
        $args['height'] = intval($args['height']);
        $args['width'] = intval($args['width']);

        parent::save($args);
    }
}
