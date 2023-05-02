<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
/*$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['artmediagallery'] = 'EXT:artmediagallery/Configuration/RTE/Default.yaml';*/

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['artmediagallery'] = 'EXT:artmediagallery/Configuration/RTE/MyFull.yaml';


/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:artmediagallery/Configuration/TsConfig/Page/All.tsconfig">');
