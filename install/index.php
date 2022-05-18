<?php
defined('B_PROLOG_INCLUDED') || die;

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\EventManager;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

use \Bitrix\Main\Entity\Base;

class katapios_tagsfiltering extends CModule
{
    const MODULE_ID = 'katapios.tagsfiltering';
    var $MODULE_ID = self::MODULE_ID;
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;
    var $strError = '';

    function __construct()
    {
        $arModuleVersion = array();
        include(dirname(__FILE__) . '/version.php');
        $this->MODULE_VERSION = $arModuleVersion['VERSION'];
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];

        $this->MODULE_NAME = Loc::getMessage('KATAPIOS.MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('KATAPIOS.MODULE_DESC');

        $this->PARTNER_NAME = Loc::getMessage('KATAPIOS.PARTNER_NAME');
        $this->PARTNER_URI = Loc::getMessage('KATAPIOS.PARTNER_URI');
    }

    function DoInstall()
    {
        ModuleManager::registerModule(self::MODULE_ID);
        $this->InstallFiles();
    }

    function DoUninstall()
    {
        $this->UnInstallFiles();
        ModuleManager::unRegisterModule(self::MODULE_ID);
    }



    function InstallEvents()
    {

    }

    function UnInstallEvents()
    {

    }

    function InstallFiles()
    {
        $documentRoot = Application::getDocumentRoot();

        CopyDirFiles(
            __DIR__ . '/files/components',
            $documentRoot . '/local/components',
            true,
            true
        );
    }


    function UnInstallFiles()
    {
        DeleteDirFilesEx('/local/components/bitrix/tasks.interface.filter/');
        DeleteDirFilesEx('/local/components/bitrix/tasks.task.list/');
        DeleteDirFilesEx('/local/components/gazprom.tasks/');
    }

}