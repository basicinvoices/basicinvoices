<?php
/**
 * @link      http://github.com/basicinvoices/basicinvoices
 * @copyright Copyright (c) 2016 Juan Pedro Gonzalez Gutierrez
 * @license   https://www.gnu.org/licenses/gpl-3.0.txt GPL v3 License
 */

namespace BasicInvoices\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
