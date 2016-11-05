<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonBasicInvoices for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BasicInvoices;

use Zend\EventManager\EventInterface;

class Module
{
    const VERSION = '0.0.1dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
