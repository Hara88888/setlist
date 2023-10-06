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
            $table->foreignId('user_id')->constrained();
            $table->integer('song_order');
            $table->date('event_date');
            $table->string('live_title',50);
            $table->string('live_memo',200)->nullable;
            $table->integer('nice');
            $table->string('live_explation',500);
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
