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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id')->autoIncrement()->primary();
            $table->string('first_lastname', 20);
            $table->string('first_name', 20);
            $table->string('other_name', 50)->nullable()->default('');
            //Country relations
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('country_id')->on('countries');
            //Identify relations
            $table->unsignedBigInteger('identify_id');
            $table->foreign('identify_id')->references('identify_id')->on('identifies');
            $table->string('identify_number', 20);
            $table->string('email', 300)->unique('email');
            $table->date('admission_date');
            //Department Relations
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('departments');
            //Status Relations
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('status_id')->on('statuses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
