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
        Schema::create('preference_route', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('preference_id');
            // $table->unsignedBigInteger('route_id');

            // $table->foreign('preference_id')->references('id')->on('preferences')->onDelete('cascade');
            // $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            // $table->timestamps();

            $table->id();
            $table->string('name');
            $table->string('code');
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
        Schema::dropIfExists('preference_route');
    }
};
