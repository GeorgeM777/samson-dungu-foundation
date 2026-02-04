<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->decimal('amount', 10, 2);
            $table->string('currency', 3)->default('GBP');
            $table->string('email');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->enum('frequency', ['one-time', 'monthly', 'quarterly']);
            $table->string('designation');
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->string('transaction_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->timestamp('completed_at')->nullable();

            $table->index(['email', 'status']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
