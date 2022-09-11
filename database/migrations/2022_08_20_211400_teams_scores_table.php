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
        Schema::create('teams_scores', function (Blueprint $table) {
            $table->id()->unique();
            $table->unsignedBigInteger("team_id");
            $table->foreign("team_id")->references("id")->on("teams")->nullable();
            $table->unsignedBigInteger("award_id");
            $table->foreign("award_id")->references("id")->on("awards")->nullable();           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('score');
    }
};
