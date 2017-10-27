<?php namespace WindLab\APIJWTGuard;

use Backend;
use System\Classes\PluginBase;

/**
 * APIJWTGuard Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'APIJWTGuard',
            'description' => 'A plugin to guard RESTFull API using Jason Web Tokens for October CMS',
            'author'      => 'WindLab',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'WindLab\APIJWTGuard\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'windlab.apijwtguard.some_permission' => [
                'tab' => 'APIJWTGuard',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
       // return []; // Remove this line to activate

        return [
            'apijwtguard' => [
                'label'       => 'APIJWTGuard',
                'url'         => Backend::url('windlab/apijwtguard/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['windlab.apijwtguard.*'],
                'order'       => 500,
            ],
        ];
    }
}
