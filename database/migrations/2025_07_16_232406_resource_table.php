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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->text('resource_name');
            $table->text('manufacturer');
            $table->text('model');
            $table->text('serial_number');
            $table->timestamp('acquisition_date')->nullable();
        });
    }
};
