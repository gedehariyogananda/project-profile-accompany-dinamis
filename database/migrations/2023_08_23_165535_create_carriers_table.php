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
        Schema::create('carriers', function (Blueprint $table) {
            $table->id();
            $table->string('identifier');
            $table->string('name_position');
            $table->text('syarat1')->nullable();
            $table->text('syarat2')->nullable();
            $table->text('syarat3')->nullable();
            $table->text('syarat4')->nullable();
            $table->text('syarat5')->nullable();
            $table->text('img')->nullable();
            $table->timestamp('tenggat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carriers');
    }
};
