<?php namespace Rezgui\Jobs\Models;

use Model;
use Carbon\Carbon;

/**
 * Job Model
 */
class Job extends Model
{
    use \Winter\Storm\Database\Traits\Sortable;
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'rezgui_jobs_jobs';

    public $rules = [
        'title' => 'required',
        'function' => 'required',
        'description' => 'required',
        'button_text' => 'required',
        'button_url' => 'required'
    ];

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now())
            ;
    }

}