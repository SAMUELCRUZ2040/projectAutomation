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
            $table->text('descriptionUser')->nullable();
            $table->string('name');
            $table->string('username');
            $table->string('pais');
            $table->string('city');
            $table->bigInteger('numberidentification');
            $table->bigInteger('phone');
            $table->string('email')->unique();
            $table->bigInteger('money')->default(0);
            $table->string('imgUser')->default('img/image-collection/user/user.png');
            $table->string('LinkedIn')->nullable();
            $table->string('GitHub')->nullable();
            $table->string('Twitter')->nullable();
            $table->string('website')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Instagram')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
