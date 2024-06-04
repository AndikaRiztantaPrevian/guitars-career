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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->string('company_name');
            $table->string('image');
            $table->string('address');
            $table->integer('salary');
            $table->text('description');
            $table->enum('employment_type', ['fulltime', 'parttime']);
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->char('province_code', 2)->nullable();
            $table->char('city_code', 4)->nullable();
            $table->char('district_code', 7)->nullable();
            $table->char('village_code', 10)->nullable();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignId('category_company_id')
                ->constrained('category_companies')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('province_code')
                ->references('code')
                ->on(config('indonesia.table_prefix') . 'provinces')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('city_code')
                ->references('code')
                ->on(config('indonesia.table_prefix') . 'cities')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('district_code')
                ->references('code')
                ->on(config('indonesia.table_prefix') . 'districts')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('village_code')
                ->references('code')
                ->on(config('indonesia.table_prefix') . 'villages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
