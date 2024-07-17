<?php
namespace Talan\BasicExtension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class BackendController extends ActionController
{
    public function indexAction(): ResponseInterface
    {
        $this->view->assign('message', 'This is a message from the backend module.');
        return $this->htmlResponse();
    }
}