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


    
        Schema::create('package_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           

            $table->timestamps();
        });

        Schema::create('type_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('pack_type_id');
            $table->timestamps();
        });
        


        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('type_id');
            $table->foreignId('avatar_id');
            $table->bigInteger('amount')->default(0);
            $table->bigInteger('advance')->default(0);
            $table->bigInteger('after_permit')->default(0);
            $table->bigInteger('after_visa')->default(0);
            $table->bigInteger('due')->default(0);
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
