<?php
defined('TYPO3') or die();

call_user_func(function () {

    $newColumns = [

        'subtitle' => [
            'exclude' => true,
            'label' => 'Subtitle',
            'config' => [
                'type' => 'input',
                'size' => 50,
            ],
        ],

        'feature_image' => [
            'exclude' => true,
            'label' => 'Feature Image',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'feature_image',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'maxitems' => 1,
                'appearance' => [
                    'createNewRelationLinkTitle' => 'Add Image'
                ],
            ],
        ],

        'description_news' => [
            'exclude' => true,
            'label' => 'Description News',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'cols' => 40,
                'rows' => 15,
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tx_news_domain_model_news',
        $newColumns
    );

    // Position fields
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tx_news_domain_model_news',
        'subtitle',
        '',
        'after:title'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tx_news_domain_model_news',
        'feature_image',
        '',
        'after:fal_related_files'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tx_news_domain_model_news',
        'description_news',
        '',
        'after:bodytext'
    );

});