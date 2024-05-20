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
        Schema::create('applicationportfolios', function (Blueprint $table) {
            $table->id();
            $table->string('imagelink');
            $table->string('appname');
            $table->string('description');
            $table->string('link');
            $table->string('language');
            $table->string('created');
            $table->string('type');
            $table->string('status');
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
        Schema::dropIfExists('applicationportfolios');
    }
};
