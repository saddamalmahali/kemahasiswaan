<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserManajemensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_manajemen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_user');
            $table->string('npm')->length(10);
            $table->string('nama')->length(50);
            $table->string('email')->unique();
            $table->enum('tipe', ['hima', 'ukm']);
            $table->string('bagian');
            $table->string('foto');
            $table->string('username')->unique();
            $table->string('password');
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
        Schema::dropIfExists('user_manajemen');
    }
}
