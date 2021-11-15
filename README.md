# [Magento 2 Plugin Sort Order](https://magefan.com/blog/prioritizing-plugins-in-magento-2)

## Installation

```
composer require magefan/module-plugin-sortorder-example
bin/magento setup:upgrade --keep-generated
bin/magento setup:di:compile
```

## How to test?

Visit url:

http://[mydomain.com]/pluginsortorderexample/pluginsortorder/example


You sould see
```
-PluginA::beforeDispatch
---PluginA::aroundDispatch // before executing callable
-----PluginB::beforeDispatch
-------PluginB::aroundDispatch // before executing callable
---------PluginC::beforeDispatch
-----------PluginC::aroundDispatch // before executing callable
-------------Action::dispatch()
-----------PluginC::aroundDispatch // after executing callable
---------PluginC::afterDispatch
-------PluginB::aroundDispatch // after executing callable
-----PluginB::afterDispatch
---PluginA::aroundDispatch // after executing callable
-PluginA::afterDispatch
```

Read more about Magento [Magento 2 Plugin Sort Order](https://magefan.com/blog/prioritizing-plugins-in-magento-2).
