<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event')->enum('thunderstorms', 'floods','winds')->default('thunderstorms');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('severity')->enum('high','medium','low')->default('medium');
            $table->string('region')->enum('lower_shire','north','central')->default('lower_shire');
            $table->text('guidelines');
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
        Schema::dropIfExists('events');
    }
}
