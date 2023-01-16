<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('marking_number');
            $table->string('email');
            $table->string('service');
            $table->string('shipper');
            $table->string('consignee');
            $table->float('volume');
            $table->string('origin');
            $table->dateTime('pickup_date');
            $table->dateTime('delivery_date')->nullable();
            $table->dateTime('actual_delivered_date')->nullable();
            $table->string('dimension');
            $table->string('weight');
            $table->string('destination');
            $table->enum('status', ['create','loading', 'process', 'success_delivered'])->default('create');
            $table->string('image')->nullable();
            $table->text('note');
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
        Schema::dropIfExists('shipments');
    }
}
