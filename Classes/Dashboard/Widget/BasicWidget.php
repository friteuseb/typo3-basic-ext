<?php
namespace Talan\BasicExtension\Dashboard\Widget;

use TYPO3\CMS\Dashboard\Widget\AbstractWidget;
use TYPO3\CMS\Fluid\View\StandaloneView;

class BasicWidget extends AbstractWidget
{
    public function __construct(
        private readonly StandaloneView $view,
        private readonly array $options = []
    ) {
        parent::__construct();
    }

    public function renderWidget(): string
    {
        $this->view->setTemplatePathAndFilename('EXT:talan_basic_extension/Resources/Private/Templates/Widget/BasicWidget.html');
        $this->view->assignMultiple([
            'options' => $this->options,
            'message' => 'This is a message from the dashboard widget.',
        ]);

        return $this->view->render();
    }
}