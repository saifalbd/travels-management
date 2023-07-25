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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->foreignId('avatar_id');
            $table->text('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });

        
        Schema::create('customer_references', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->string('ref')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->timestamps();
        });



        Schema::create('customer_agreemants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('nid');
            $table->string('passport');
            $table->foreignId('package_id')->nullable();
            $table->date('date');
            $table->bigInteger('amount')->default(0);
            $table->bigInteger('advance')->default(0);
            $table->bigInteger('after_permit')->default(0);
            $table->bigInteger('after_visa')->default(0);
            $table->bigInteger('due')->default(0);
            $table->timestamps();
        });

        Schema::create('customer_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreignId('agreemant_id');
            $table->date('date');
            $table->string('bank');
            $table->string('branch');
            $table->string('check_no');
            $table->boolean('approved');
            $table->foreignId('attachment_id')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
