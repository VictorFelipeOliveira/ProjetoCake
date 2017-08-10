<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;

/**
 * Application View
 *
 * Your application’s default view class
 *
 * @link http://book.cakephp.org/3.0/en/views.html#the-app-view
 */
class AppView extends View
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    protected function _paths($plugin = null, $cached = true)
    {
        $prefix = $this->request->getParam('prefix') ? Inflector::camelize($this->request->getParam('prefix')) : false;
        $theme = $this->theme;

        $templatePaths = App::path(static::NAME_TEMPLATE);

        $pluginPaths = [];

        foreach ($templatePaths as $templateCurrent) {
            if (!empty($theme)) {
                if (!empty($plugin)) {
                    for ($i = 0, $count = count($templatePaths); $i < $count; $i++) {
                        if ($prefix) {
                            $pluginPaths[] = $templatePaths[$i] . 'Plugin'.  DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR . 'Plugin' . DIRECTORY_SEPARATOR . $plugin . DIRECTORY_SEPARATOR . $prefix . DIRECTORY_SEPARATOR;
                        }

                        $pluginPaths[] = $templatePaths[$i] . 'Plugin'.  DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR . 'Plugin' . DIRECTORY_SEPARATOR . $plugin . DIRECTORY_SEPARATOR;
                    }
                }

                if ($prefix) {
                    $themePaths[] = $templateCurrent . 'Plugin'.  DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR . $prefix . DIRECTORY_SEPARATOR;
                }

                $themePaths[] = $templateCurrent . 'Plugin'.  DIRECTORY_SEPARATOR . $theme . DIRECTORY_SEPARATOR;
            }
        }

        $paths = array_merge(
            $pluginPaths,
            $themePaths,
            parent::_paths($plugin, $cached)
        );

        return $this->_paths = $paths;
    }
}
