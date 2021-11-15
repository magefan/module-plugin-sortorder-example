<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\PluginSortOrderExample\Plugin;

use Magefan\PluginSortOrderExample\Controller\PluginSortOrder\Example;

class PluginB
{
    /**
     * @param Example $subject
     */
    public function beforeExecute(Example $subject)
    {
        echo '<div>-----PluginB::beforeDispatch</div>';
    }

    /**
     * @param Example $subject
     * @param $result
     * @return mixed
     */
    public function afterExecute(Example $subject, $result)
    {
        echo '<div>-----PluginB::afterDispatch</div>';
        return $result;
    }

    /**
     * @param Example $subject
     * @param callable $proceed
     * @return mixed
     */
    public function aroundExecute(Example $subject, callable $proceed)
    {
        echo '<div>-------PluginB::aroundDispatch // before executing callable</div>';
        $result = $proceed();
        echo '<div>-------PluginB::aroundDispatch // after executing callable</div>';
        return $result;
    }
}
