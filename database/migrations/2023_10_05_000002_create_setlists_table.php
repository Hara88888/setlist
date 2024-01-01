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
        Schema::create('setlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('venue_id')->constrained();
            // $table->foreignId('user_id')->constrained();
            $table->date('event_date');
            $table->string('live_title',50);
            $table->integer('nice')->default(0);
            $table->string('live_explation',500)->nullable();
            $table->string('live_img')->nullable();
            $table->timestamps();
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setlists');
    }
};
