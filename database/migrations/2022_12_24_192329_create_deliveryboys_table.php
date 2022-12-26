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
        Schema::create('deliveryboys', function (Blueprint $table) {
            $table->id();
            $table->string('deliveryboy_name');
            $table->string('deliveryboy_image');
            $table->char('deliveryboy_email');
            $table->char('deliveryboy_mobile');
            $table->string('deliveryboy_address');
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
        Schema::dropIfExists('deliveryboys');
    }
};
