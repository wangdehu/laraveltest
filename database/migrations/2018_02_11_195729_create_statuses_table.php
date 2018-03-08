<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->integer('id',1);
            $table->string('username')->index('username');
            $table->integer('problem_id')->index('pro_id');
            $table->integer('contest_belong')->default(0);
            $table->integer('result');
            $table->integer('time');
            $table->integer('memory');
            $table->integer('length');
            $table->integer('lang');
            $table->timestamp('submit_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
