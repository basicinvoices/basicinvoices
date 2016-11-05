<?php
/**
 * @link      http://github.com/basicinvoices/basicinvoices
 * @copyright Copyright (c) 2016 Juan Pedro Gonzalez Gutierrez
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt GPL v3 License
 */

namespace BasicInvoices;

class Module
{
    const VERSION = '0.0.1dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
