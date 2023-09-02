<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->longText('ar_description')->nullable();
            $table->longText('en_description')->nullable();
            $table->string('date')->nullable();
            $table->string('address')->nullable();
            $table->string('notes')->nullable();
            $table->string('area')->nullable();
            $table->enum('type',['sales','website','maintenance'])->default('sales');
            $table->foreignId('client_id')->constrained('clients')->cascadeOnDelete()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
