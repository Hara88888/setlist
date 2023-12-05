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
        Schema::create('music_setlist', function (Blueprint $table) {
            $table->ForeignId('setlist_id')->constrained() -> cascadeOnDelete();
            $table->ForeignId('music_id')->constrained("musics") -> cascadeOnDelete();
            $table->primary(['setlist_id','music_id']);
            $table->integer('song_order');
            $table->string('live_memo',200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setlists_musics');
    }
};
