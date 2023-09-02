<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_invoices', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('project_name')->nullable();
            $table->string('invoice_image')->nullable();
            $table->string('price');
            $table->enum('type',['income','outcome'])->default('outcome');
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete();
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
        Schema::dropIfExists('employees_invoices');
    }
}
