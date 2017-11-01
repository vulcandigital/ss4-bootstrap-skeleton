<?php

namespace Vulcan\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataExtension;

/**
 * Class SiteConfigScriptsExtension
 * @package Vulcan\Extensions
 */
class SiteConfigScriptsExtension extends DataExtension
{
    private static $db = [
        'HeaderScripts' => 'Text',
        'FooterScripts' => 'Text'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        parent::updateCMSFields($fields);

        $fields->addFieldsToTab('Root.Scripts', [
            TextareaField::create('HeaderScripts'),
            TextareaField::create('FooterScripts'),
        ]);
    }
}