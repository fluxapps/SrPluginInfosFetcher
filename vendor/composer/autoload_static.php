<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e78b5e3f68e5eb703e9a1f90052c86c
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\SrPluginInfosFetcher\\' => 50,
            'srag\\Plugins\\SrPluginInfosFetcher\\' => 34,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\GitCurl\\SrPluginInfosFetcher\\' => 34,
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
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\CheckboxInputGUI\\CheckboxInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/CheckboxInputGUI/CheckboxInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\CustomInputGUIs' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIs.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\CustomInputGUIsTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/CustomInputGUIsTrait.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\HiddenInputGUI\\HiddenInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/HiddenInputGUI/HiddenInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraint54' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraint54.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\InputGUIWrapperConstraintTrait' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperConstraintTrait.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\InputGUIWrapperUIInputComponent' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/InputGUIWrapperUIInputComponent.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\InputGUIWrapperUIInputComponent\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/InputGUIWrapperUIInputComponent/Renderer.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\LearningProgressPieUI\\AbstractLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/AbstractLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\LearningProgressPieUI\\CountLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/CountLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\LearningProgressPieUI\\LearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/LearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\LearningProgressPieUI\\ObjIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/ObjIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\LearningProgressPieUI\\UsrIdsLearningProgressPieUI' => __DIR__ . '/..' . '/srag/custominputguis/src/LearningProgressPieUI/UsrIdsLearningProgressPieUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiLineNewInputGUI\\MultiLineNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineNewInputGUI/MultiLineNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\MultiSelectSearchNewInputGUI\\MultiSelectSearchNewInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchNewInputGUI/MultiSelectSearchNewInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Component\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/LegendEntry.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Component\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChart.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Component\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/PieChartItem.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Component\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/Section.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Component\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Component/SectionValue.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Implementation\\LegendEntry' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/LegendEntry.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Implementation\\PieChart' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChart.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Implementation\\PieChartItem' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/PieChartItem.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Implementation\\Section' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/Section.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\PieChart\\Implementation\\SectionValue' => __DIR__ . '/..' . '/srag/custominputguis/src/PieChart/Implementation/SectionValue.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Component\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Factory.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Component\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/FixedSize.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Component\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Mini.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Component\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/ProgressMeter.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Component\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Component/Standard.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Implementation\\Factory' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Factory.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Implementation\\FixedSize' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/FixedSize.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Implementation\\Mini' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Mini.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Implementation\\ProgressMeter' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/ProgressMeter.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Implementation\\Renderer' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Renderer.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ProgressMeter\\Implementation\\Standard' => __DIR__ . '/..' . '/srag/custominputguis/src/ProgressMeter/Implementation/Standard.php',
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
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\ViewControlModeUI\\ViewControlModeUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ViewControlModeGUI/ViewControlModeUI.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\CustomInputGUIs\\SrPluginInfosFetcher\\WeekdayInputGUI\\WeekdayInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/WeekdayInputGUI/WeekdayInputGUI.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\Implementation\\ILIAS53DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS53DIC.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\SrPluginInfosFetcher\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\SrPluginInfosFetcher\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\GitCurl\\SrPluginInfosFetcher\\GitCurl' => __DIR__ . '/..' . '/srag/gitcurl/src/GitCurl.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Access\\DataCollections' => __DIR__ . '/../..' . '/src/Access/DataCollections.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Access\\Ilias' => __DIR__ . '/../..' . '/src/Access/Ilias.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Config\\ConfigCtrl' => __DIR__ . '/../..' . '/src/Config/class.ConfigCtrl.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Config\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/ConfigFormGUI.php',
        'srag\\Plugins\\SrPluginInfosFetcher\\Config\\Factory' => __DIR__ . '/../..' . '/src/Config/Factory.php',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e78b5e3f68e5eb703e9a1f90052c86c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e78b5e3f68e5eb703e9a1f90052c86c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5e78b5e3f68e5eb703e9a1f90052c86c::$classMap;

        }, null, ClassLoader::class);
    }
}
