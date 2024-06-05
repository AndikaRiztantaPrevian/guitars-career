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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->string('image')->default('photo-profile/default/user.png');
            $table->text('bio')->nullable();
            $table->text('address')->nullable();
            $table->char('province_code', 2)->nullable();
            $table->char('city_code', 4)->nullable();
            $table->char('district_code', 7)->nullable();
            $table->char('village_code', 10)->nullable();
            $table->enum('role', ['user', 'owner'])->nullable();
            $table->integer('post_limit')->default(0);
            $table->string('google_id')->nullable();
            $table->string('google_token')->nullable();
            $table->string('google_refresh_token')->nullable();
            $table->rememberToken();
            $table->timestamps();

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
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
