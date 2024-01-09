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
        Schema::create('stakeholders', function (Blueprint $table) {
            $table->id();
            $table->text("first_name");
            $table->text("last_name")->nullable();
            $table->longText("CNIC")->nullable();
            $table->string("phone");
            $table->integer("opening_balance")->default(0);
            $table->integer("balance");
            $table->enum("status",["active","inactive"]);
            $table->integer("user_group_id");
            $table->text("city");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stakeholders');
    }
};
