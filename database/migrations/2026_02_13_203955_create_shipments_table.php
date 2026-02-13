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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string("tracking_number")->unique();
            $table->foreignId("customer_id")->constrained("customers")->onDelete("cascade");
            $table->enum("status", ["new", "in_transit", "delivered", "delayed"])->default("new");
            $table->decimal("amount",10,2)->default(0.00);
            $table->text("description")->nullable();
            $table->timestamp('shipped_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipments');
    }
};
