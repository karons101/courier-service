<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();

            // Sender
            $table->string('sender_name');
            $table->string('sender_address');

            // Recipient
            $table->string('recipient_name');
            $table->string('recipient_address');

            // Package
            $table->decimal('weight', 8, 2);
            $table->text('description')->nullable();

            // Tracking
            $table->string('tracking_id')->unique();
            $table->string('status')->default('Pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
