<?php
/**
 * uninstall.php - cleanup on module uninstall
 *
 * @author          XOOPS Module Development Team
 * @copyright       {@link https://xoops.org 2001-2016 XOOPS Project}
 * @license         {@link http://www.fsf.org/copyleft/gpl.html GNU public license}
 * @link            https://xoops.org XOOPS
 */

use XoopsModules\Slider;

include_once ("fnc-slider.php");
/**
 * Prepares system prior to attempting to uninstall module
 * @param \XoopsModule $module {@link XoopsModule}
 *
 * @return bool true if ready to uninstall, false if not
 */
function xoops_module_pre_uninstall_slider(\XoopsModule $module)
{
    // Do some synchronization
    return true;
}

/**
 * Performs tasks required during uninstallation of the module
 * @param \XoopsModule $module {@link XoopsModule}
 *
 * @return bool true if uninstallation successful, false if not
 */
function xoops_module_uninstall_slider(\XoopsModule $module)
{
    //    return true;

    $moduleDirName      = \basename(\dirname(__DIR__));
    $moduleDirNameUpper = \mb_strtoupper($moduleDirName);
    /** @var Slider\Helper $helper */
    $helper = Slider\Helper::getInstance();

    /** @var Slider\Utility $utility */
    $utility = new Slider\Utility();

    $success = true;
    $helper->loadLanguage('admin');

    //------------------------------------------------------------------
    // r�initialise tous les themes si besoin
    //------------------------------------------------------------------
    cleanAllThemesFolder();
    
    //------------------------------------------------------------------
    // Remove uploads folder (and all subfolders) if they exist
    //------------------------------------------------------------------

    $old_directories = [$GLOBALS['xoops']->path("uploads/{$moduleDirName}")];
    foreach ($old_directories as $old_dir) {
        $dirInfo = new \SplFileInfo($old_dir);
        if ($dirInfo->isDir()) {
            // The directory exists so delete it
            if (!$utility::rrmdir($old_dir)) {
                $module->setErrors(\sprintf(\constant('CO_SLIDER_ERROR_BAD_DEL_PATH'), $old_dir));
                $success = false;
            }
        }
        unset($dirInfo);
    }
    /*
    //------------ START ----------------
    $xmlfile = $GLOBALS['xoops']->path('xsitemap.xml');
    if (is_file($xmlfile)) {
        if (false === ($delOk = \unlink($xmlfile))) {
            $module->setErrors(\sprintf(_AM_SLIDER_ERROR_BAD_REMOVE, $xmlfile));
        }
    }
//    return $success && $delOk; // use this if you're using this routine
*/

    return $success;
    //------------ END  ----------------
}
