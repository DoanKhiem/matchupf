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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('active');
            $table->string('logo')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('location');
            $table->string('type');
            $table->string('salary');
            $table->string('experience');
            // $table->unsignedBigInteger('company_id');
            $table->text('description');
            $table->json('responsibilities');
            $table->json('skills');
            $table->json('benefits');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
