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
        Schema::create('guest_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->string('guest_email')->nullable();
            $table->string('nim')->nullable();
            $table->foreignId('facility_id')->constrained('facilities');
            $table->String('activity_name');
            $table->String('transaction_code');
            $table->datetime('schedule_start');
            $table->datetime('schedule_end');
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
        Schema::dropIfExists('guest_transactions');
    }
};
