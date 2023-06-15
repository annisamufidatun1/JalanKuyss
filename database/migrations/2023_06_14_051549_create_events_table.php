<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id_event');
            $table->string('title',50);
            $table->string('event_location',50);
            $table->string('category',15);
            $table->integer('ticket_price');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('event_detail');
            $table->string('event_website');
            $table->string('event_logo');
            $table->string('event_poster');
            $table->decimal('event_rating',8,2)->nullable();

            $table->unsignedInteger('id_form')->nullable();
            $table->foreign('id_form')->references('id_form')->on('regist_forms')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
