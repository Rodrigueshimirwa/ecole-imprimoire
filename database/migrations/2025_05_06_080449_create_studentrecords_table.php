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
        Schema::create('studentrecords', function (Blueprint $table) {
            $table->id();
            $table->string("studentfullnames");
            $table->string("subject1");
            $table->integer("marksforsubject1");
            $table->string("subject2");
            $table->integer("marksforsubject2");
            $table->string("subject3");
            $table->integer("marksforsubject3");
            $table->string("Class");
            $table->string("Total");
            $table->string("Decision");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentrecords');
    }
};
