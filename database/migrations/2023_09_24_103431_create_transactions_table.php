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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('facility_id')->constrained('facilities');
            $table->String('activity_name');
            $table->String('transaction_code');
            $table->dateTime('schedule_start');
            $table->dateTime('schedule_end');
            $table->integer('duration_hours');
            $table->text('description');
            $table->String('phone_number');
            $table->decimal('amount', 10, 2);
            $table->String('bank_name');
            $table->String('bank_account_number');
            $table->String('proof_of_payment');
            $table->String('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
