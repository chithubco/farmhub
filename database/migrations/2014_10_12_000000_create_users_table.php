<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('business_name')->nullable();
            $table->enum('sex',['Male','Female'])->default('Male');
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('city');
            $table->string('_state');
            $table->string('alt_phone')->nullable();
            $table->string('education');
            $table->string('yoe')->nullable();
            $table->string('segment');
            $table->string('focus')->nullable();
            $table->string('email')->nullable();
            $table->text('constraint')->nullable();
            $table->text('comment')->nullable();
            $table->enum('is_admin',['Y','N'])->default('N');
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
        Schema::drop('users');
    }
}
