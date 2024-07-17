<?php
defined('TYPO3') or die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'TalanBasicExtension',
        'BasicPlugin',
        [
            \Talan\BasicExtension\Controller\BasicController::class => 'index',
        ],
        [
            \Talan\BasicExtension\Controller\BasicController::class => 'index',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        'module.tx_talanbasicextension_basicmodule {
            view {
                templateRootPaths.0 = EXT:talan_basic_extension/Resources/Private/Backend/Templates/
                layoutRootPaths.0 = EXT:talan_basic_extension/Resources/Private/Backend/Layouts/
                partialRootPaths.0 = EXT:talan_basic_extension/Resources/Private/Backend/Partials/
            }
        }'
    );
})();