<?php

defined('TYPO3') or die('Access denied.');

// RTE preset
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['my_site_package'] =
    'EXT:my_site_package/Configuration/RTE/Default.yaml';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\GeorgRinger\News\Domain\Model\News::class] = [
    'className' => \Nitsan\MySitePackage\Domain\Model\News::class

];

