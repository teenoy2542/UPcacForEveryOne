<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenseCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_car', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_users');
            $table->string('license_car')->nullable();
            $table->string('brand_car')->nullable();
            $table->string('model_car')->nullable();
            $table->string('color_car')->nullable();
            $table->string('number_seats')->nullable();
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
        Schema::dropIfExists('license_car');
    }
}
