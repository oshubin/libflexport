<?php
/**
 * Created by PhpStorm.
 * User: mrc
 * Date: 10/26/16
 * Time: 6:46 PM
 */

namespace FINDOLOGIC\XmlExport\Elements;


use FINDOLOGIC\XmlExport\Helpers\UsergroupAwareSimpleValue;

class Price extends UsergroupAwareSimpleValue
{
    public function __construct()
    {
        parent::__construct('prices', 'price');
    }
}