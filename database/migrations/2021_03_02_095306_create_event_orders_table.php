<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('format_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('style_id')->unsigned();
            $table->string('img');
            $table->timestamps();

            $table->foreign('format_id')->references('id')->on('event_formats')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('event_types')->onDelete('cascade');
            $table->foreign('style_id')->references('id')->on('event_styles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_orders');
    }
}
