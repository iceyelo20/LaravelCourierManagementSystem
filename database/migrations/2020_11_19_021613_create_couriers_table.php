<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number');
            $table->string('sender_branch');
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('sender_phone');
            $table->text('sender_address');
            $table->string('sender_city');
            $table->string('sender_pin');
            $table->string('recipient_name');
            $table->string('recipient_email');
            $table->string('recipient_phone');
            $table->text('recipient_address');
            $table->string('recipient_city');
            $table->string('recipient_pin');
            $table->string('description');
            $table->string('weight');
            $table->bigint('price');
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
        Schema::dropIfExists('couriers');
    }
}
