<?php

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\View\Requirements;

class Page extends SiteTree
{
    private static $db = [];

    private static $has_one = [];
}

class PageController extends ContentController
{
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * );
     * </code>
     *
     * @var array
     */
    private static $allowed_actions = [

    ];

    protected function init()
    {
        parent::init();

        Requirements::css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        Requirements::css('https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i');
        Requirements::css('/themes/default/bower_components/bootstrap/dist/css/bootstrap.min.css');

        Requirements::javascript('/themes/default/bower_components/jquery/dist/jquery.min.js');
        Requirements::javascript('/themes/default/bower_components/bootstrap/dist/js/bootstrap.min.js');
    }
}
