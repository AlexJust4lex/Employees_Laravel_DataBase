<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_data_models', function (Blueprint $table) {
            $table->id('number');
            $table->timestamps();
            $table->date('date');
            $table->string('worker');
            $table->string('job');
            $table->string('status');
            $table->string('mate');
            $table->string('payment');
            $table->text('comments');
            $table->string('job_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_data_models');
    }
};
