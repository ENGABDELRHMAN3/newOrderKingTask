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
            $table->integer('role')->default(3)->comment('if == 1 ? superAdmin elseif == 2 Admin "tenant Admin  else == 3 normal User');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ApiKey')->nullable()->index();
            // $table->integer('SuperAdmin')->default(3);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
