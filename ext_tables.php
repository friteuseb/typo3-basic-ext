<?php
defined('TYPO3') or die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'TalanBasicExtension',
        'web',
        'basicmodule',
        '',
        [
            \Talan\BasicExtension\Controller\BackendController::class => 'index',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:talan_basic_extension/Resources/Public/Icons/Extension.svg',
            'labels' => 'LLL:EXT:talan_basic_extension/Resources/Private/Language/locallang_basicmodule.xlf',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        'module.tx_talanbasicextension_web_talanbasicextensionbasicmodule {
            view {
                templateRootPaths.0 = EXT:talan_basic_extension/Resources/Private/Backend/Templates/
                layoutRootPaths.0 = EXT:talan_basic_extension/Resources/Private/Backend/Layouts/
                partialRootPaths.0 = EXT:talan_basic_extension/Resources/Private/Backend/Partials/
            }
        }'
    );
})();