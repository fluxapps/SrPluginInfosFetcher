<?php

require_once __DIR__ . "/../vendor/autoload.php";

use ILIAS\DI\Container;
use srag\CustomInputGUIs\SrPluginInfosFetcher\Loader\CustomInputGUIsLoaderDetector;
use srag\DevTools\SrPluginInfosFetcher\DevToolsCtrl;
use srag\Plugins\SrPluginInfosFetcher\Utils\SrPluginInfosFetcherTrait;
use srag\RemovePluginDataConfirm\SrPluginInfosFetcher\PluginUninstallTrait;

/**
 * Class ilSrPluginInfosFetcherPlugin
 */
class ilSrPluginInfosFetcherPlugin extends ilCronHookPlugin
{

    use PluginUninstallTrait;
    use SrPluginInfosFetcherTrait;

    const PLUGIN_CLASS_NAME = self::class;
    const PLUGIN_ID = "srplinfe";
    const PLUGIN_NAME = "SrPluginInfosFetcher";
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * ilSrPluginInfosFetcherPlugin constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @inheritDoc
     */
    public function exchangeUIRendererAfterInitialization(Container $dic) : Closure
    {
        return CustomInputGUIsLoaderDetector::exchangeUIRendererAfterInitialization();
    }


    /**
     * @inheritDoc
     */
    public function getCronJobInstance(/*string*/ $a_job_id)/*: ?ilCronJob*/
    {
        return self::srPluginInfosFetcher()->jobs()->factory()->newInstanceById($a_job_id);
    }


    /**
     * @inheritDoc
     */
    public function getCronJobInstances() : array
    {
        return self::srPluginInfosFetcher()->jobs()->factory()->newInstances();
    }


    /**
     * @inheritDoc
     */
    public function getPluginName() : string
    {
        return self::PLUGIN_NAME;
    }


    /**
     * @inheritDoc
     */
    public function updateLanguages(/*?array*/ $a_lang_keys = null)/*:void*/
    {
        parent::updateLanguages($a_lang_keys);

        $this->installRemovePluginDataConfirmLanguages();

        DevToolsCtrl::installLanguages(self::plugin());
    }


    /**
     * @inheritDoc
     */
    protected function deleteData()/*: void*/
    {
        self::srPluginInfosFetcher()->dropTables();
    }


    /**
     * @inheritDoc
     */
    protected function shouldUseOneUpdateStepOnly() : bool
    {
        return true;
    }
}
