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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users","id")->cascadeOnDelete();
            $table->string('title')->default("Home");
            $table->string("address_line1")->nullable(true);
            $table->string("address_line2")->nullable(true);
            $table->string("address_city")->nullable(true);
            $table->string("address_state")->nullable(true);
            $table->string("address_country")->nullable(true);
            $table->string("address_zipcode")->nullable(true);
            $table->tinyInteger("status")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
