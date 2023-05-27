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
        Schema::create('events', function (Blueprint $table)
	{
		$table->id();
		$table->string('event_id')->unique();
		$table->string('eventName');
		$table->string('event_Time');
		$table->string('event_Data');
		$table->string('event_Place');
		$table->string('event_Picture');
		$table->string('event_Desc');
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
