<?php namespace Rezgui\Jobs\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('rezgui_jobs_jobs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('function');
            $table->mediumText('description');
            $table->string('cover')->nullable();
            $table->string('avatar')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->integer('sort_order')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rezgui_jobs_jobs');
    }
}
