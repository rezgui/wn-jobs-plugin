<?php namespace Rezgui\Jobs;

use Backend;
use System\Classes\PluginBase;
use Illuminate\Support\Facades\Event;

/**
 * Jobs Plugin Information File
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
            'name'        => 'rezgui.jobs::lang.plugin.name',
            'description' => 'rezgui.jobs::lang.plugin.description',
            'author'      => 'Yacine REZGUI',
            'icon'        => 'icon-user-plus'
        ];
    }

    public function registerComponents()
    {
        return [
            'Rezgui\Jobs\Components\Jobs' => 'jobList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'rezgui.jobs.manage_jobs' => [
                'tab' => 'Jobs',
                'label' => 'Manage Jobs'
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
        return [
            'jobs' => [
                'label'       => 'Jobs',
                'url'         => Backend::url('rezgui/jobs/jobs'),
                'icon'        => 'icon-user-plus',
                'permissions' => ['rezgui.jobs.*'],
                'order'       => 500,
            ],
        ];
    }
}
