<?php namespace Rezgui\Jobs\Components;

use Cms\Classes\ComponentBase;
use Rezgui\Jobs\Models\Job;

class Jobs extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'rezgui.jobs::lang.components.jobList.name',
            'description' => 'rezgui.jobs::lang.components.jobList.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $this->_prepareVars();
        $this->_loadAssets();
    }

    protected function _prepareVars(){
        $this->jobs = $this->page['jobs'] = $this->_loadJobs();
    }

    protected function _loadAssets(){
        $this->addCss('assets/css/jobs.joblist.css');
    }

    protected function _loadJobs()
    {
        $jobs = Job::isPublished()->get();

        return $jobs;
    }
}
