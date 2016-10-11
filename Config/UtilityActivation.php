<?php
/**
 * @name UtilityActivation
 *
 * @version  1.0
 *
 * @author   Issa Khalil<issa.mh.khalil@gmail.com>< http://www.linkedin.com/in/issakhalil>
 * @license
 *
 * @link
 */
class UtilityActivation
{
    /**
     * onActivate will be called if this returns true.
     *
     * @param object $controller
     *                           Controller
     *
     * @return bool
     */
    public function beforeActivation(&$controller)
    {
        return true;
    }

    /**
     * Called after activating the plugin in ExtensionsPluginsController::admin_toggle().
     *
     * @param object $controller
     *                           Controller
     *
     * @return void
     */
    public function onActivation(&$controller)
    {
        return true;
    }

    /**
     * onDeactivate will be called if this returns true.
     *
     * @param object $controller
     *                           Controller
     *
     * @return bool
     */
    public function beforeDeactivation(&$controller)
    {
        return true;
    }

    /**
     * Called after deactivating the plugin in ExtensionsPluginsController::admin_toggle().
     *
     * @param object $controller
     *                           Controller
     *
     * @return void
     */
    public function onDeactivation(&$controller)
    {
        return true;
    }
}
