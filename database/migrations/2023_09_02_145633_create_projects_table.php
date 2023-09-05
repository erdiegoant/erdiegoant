<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->text('content');
            $table->string('url')->nullable();
            $table->boolean('active')->default(true);
            $table->string('background')->nullable();
            $table->timestamps();
        });
    }
};
