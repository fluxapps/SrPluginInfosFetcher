<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd8bb46c40a0dbfde8cbfecb37012657c
{
    public static $files = array (
        '8f5ef0e369859ce50df96a5efc962349' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        '63200d7bb754e527ddab55276020d8f9' => __DIR__ . '/..' . '/srag/dic/src/Ilias7PreWarn.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\SrPluginInfosFetcher\\' => 50,
            'srag\\Plugins\\SrPluginInfosFetcher\\' => 34,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\GitCurl\\SrPluginInfosFetcher\\' => 34,
            'srag\\DevTools\\' => 14,
            'srag\\DIC\\SrPluginInfosFetcher\\' => 30,
            'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\' => 42,
            'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\' => 45,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\SrPluginInfosFetcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\SrPluginInfosFetcher\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\GitCurl\\SrPluginInfosFetcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/gitcurl/src',
        ),
        'srag\\DevTools\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/devtools/src',
        ),
        'srag\\DIC\\SrPluginInfosFetcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'ilSrPluginInfosFetcherConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilSrPluginInfosFetcherConfigGUI.php',
        'ilSrPluginInfosFetcherPlugin' => __DIR__ . '/../..' . '/classes/class.ilSrPluginInfosFetcherPlugin.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\ActiveRecordConfigFactory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\ActiveRecordConfigRepository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\ActiveRecordObjectFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordObjectFormGUI.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\Config\\AbstractFactory' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractFactory.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\Config\\AbstractRepository' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/AbstractRepository.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\Config\\Config' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Config/Config.php',
        'srag\\ActiveRecordConfig\\SrPluginInfosFetcher\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\CheckboxInputGUI\\AjaxCheckbox' => __DIR__ . '/..' . '/srag/custominputguis/src/AjaxCheckbox/AjaxCheckbox.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ColorPickerInputGUI\\ColorPickerInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ColorPickerInputGUI/ColorPickerInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\FormBuilder\\AbstractFormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/AbstractFormBuilder.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\FormBuilder\\FormBuilder' => __DIR__ . '/..' . '/srag/custominputguis/src/FormBuilder/FormBuilder.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\AbstractRenderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/AbstractRenderer.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\Loader\\CustomInputGUIsLoaderDetector' => __DIR__ . '/..' . '/srag/custominputguis/src/Loader/CustomInputGUIsLoaderDetector.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchNewInputGUI\\AbstractAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/AbstractAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchNewInputGUI\\ObjectChildrenAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectChildrenAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchNewInputGUI\\ObjectsAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.ObjectsAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchNewInputGUI\\OrgUnitAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.OrgUnitAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchNewInputGUI\\UsersAjaxAutoCompleteCtrl' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/class.UsersAjaxAutoCompleteCtrl.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PropertyFormGUI\\ConfigPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ConfigPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PropertyFormGUI\\Exception\\PropertyFormGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Exception/PropertyFormGUIException.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PropertyFormGUI\\Items\\Items' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/Items/Items.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PropertyFormGUI\\ObjectPropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/ObjectPropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PropertyFormGUI\\PropertyFormGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/PropertyFormGUI/PropertyFormGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\TableGUI\\Exception\\TableGUIException' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/Exception/TableGUIException.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\TableGUI\\TableGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TableGUI/TableGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\TabsInputGUI\\MultilangualTabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/MultilangualTabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\TabsInputGUI\\TabsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\TabsInputGUI\\TabsInputGUITab' => __DIR__ . '/..' . '/srag/custominputguis/src/TabsInputGUI/TabsInputGUITab.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\TextInputGUI\\TextInputGUIWithModernAutoComplete' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUIWithModernAutoComplete.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\UIInputComponentWrapperInputGUI\\UIInputComponentWrapperNameSource' => __DIR__ . '/..' . '/srag/custominputguis/src/UIInputComponentWrapperInputGUI/UIInputComponentWrapperNameSource.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DevTools\\DevToolsCtrl' => __DIR__ . '/..' . '/srag/dic/src/DevTools/class.DevToolsCtrl.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Ilias7PreWarn' => __DIR__ . '/..' . '/srag/dic/src/Ilias7PreWarn.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Loader\\AbstractLoaderDetector' => __DIR__ . '/..' . '/srag/dic/src/Loader/AbstractLoaderDetector.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\DevTools\\SrPluginInfosFetcher\\DevToolsCtrl' => __DIR__ . '/..' . '/srag/devtools/src/class.DevToolsCtrl.php',
        'srag\\GitCurl\\SrPluginInfosFetcher\\GitCurl' => __DIR__ . '/..' . '/srag/gitcurl/src/GitCurl.php',
        'srag\\LibrariesNamespaceChanger\\GeneratePluginPhpAndXml' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/GeneratePluginPhpAndXml.php',
        'srag\\LibrariesNamespaceChanger\\GeneratePluginReadme' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/GeneratePluginReadme.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\UpdatePluginReadme' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/UpdatePluginReadme.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Access\\DataCollections' => __DIR__ . '/../..' . '/src/Access/DataCollections.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Access\\Ilias' => __DIR__ . '/../..' . '/src/Access/Ilias.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Config\\ConfigCtrl' => __DIR__ . '/../..' . '/src/Config/class.ConfigCtrl.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Config\\Factory' => __DIR__ . '/../..' . '/src/Config/Factory.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Config\\Form\\FormBuilder' => __DIR__ . '/../..' . '/src/Config/Form/FormBuilder.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Config\\Repository' => __DIR__ . '/../..' . '/src/Config/Repository.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Info\\PluginInfo' => __DIR__ . '/../..' . '/src/Info/PluginInfo.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Job\\Factory' => __DIR__ . '/../..' . '/src/Job/Factory.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Job\\PluginInfosFetcherJob' => __DIR__ . '/../..' . '/src/Job/PluginInfosFetcherJob.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Job\\Repository' => __DIR__ . '/../..' . '/src/Job/Repository.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Repository' => __DIR__ . '/../..' . '/src/Repository.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Utils\\SrPluginInfosFetcherTrait' => __DIR__ . '/../..' . '/src/Utils/SrPluginInfosFetcherTrait.php',
        'srag\\RemovePluginDataConfirm\\SrPluginInfosFetcher\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrPluginInfosFetcher\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\SrPluginInfosFetcher\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\SrPluginInfosFetcher\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd8bb46c40a0dbfde8cbfecb37012657c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd8bb46c40a0dbfde8cbfecb37012657c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd8bb46c40a0dbfde8cbfecb37012657c::$classMap;

        }, null, ClassLoader::class);
    }
}
