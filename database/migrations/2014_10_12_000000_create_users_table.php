<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('role', ['cust', 'EO']);
            $table->string('username');
            $table->string('email');
            $table->string('email_verified_at')->nullable();
            $table->string('no_hp');
            $table->string('password');
            $table->string('profile_pict')->default('default.png'); // Ubah dari text ke string
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
        Schema::dropIfExists('users');
    }
};
