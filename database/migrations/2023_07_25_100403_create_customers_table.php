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
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->timestamps();
        });


        Schema::create('agreemant_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agreemant_id');
            $table->foreignId('tag_id');
            $table->text('note')->nullable();
            $table->timestamps();
        });

        Schema::create('progress-attach', function (Blueprint $table) {
            $table->foreignId('progress_id');
            $table->foreignId('attach_id');
        });


        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('branch');
            $table->string('number')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Schema::create('customer_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreignId('agreemant_id');
            $table->foreignId('by_id')->nullable();
            $table->bigInteger('amount');
            $table->date('date');
            $table->foreignId('bank_id');
            $table->string('branch')->nullable();
            $table->string('check_no')->nullable();
            $table->boolean('approved')->default(false);
            $table->foreignId('attachment_id')->nullable();
            $table->string('remark')->default('');
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
