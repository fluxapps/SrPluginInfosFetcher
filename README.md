# SrPluginInfosFetcher ILIAS Plugin

Cron job plugin for http://plugins.ilias.de to keep plugin's version, min_ilias_version and max_ilias_version up to date

This project is licensed under the GPL-3.0-only license

## Requirements

* ILIAS 6.0 - 7.999
* PHP >=7.2

## Installation

Start at your ILIAS root directory

```bash
mkdir -p Customizing/global/plugins/Services/Cron/CronHook
cd Customizing/global/plugins/Services/Cron/CronHook
git clone https://github.com/fluxapps/SrPluginInfosFetcher.git SrPluginInfosFetcher
```

Update, activate and config the plugin in the ILIAS Plugin Administration

## Description

![Last modification](./doc/images/last_modification.png)
