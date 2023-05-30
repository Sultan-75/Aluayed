<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFrontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fronts', function (Blueprint $table) {
            $table->id();
            $table->string("country");
            $table->string("title");
            $table->string("fname");
            $table->string("lname");
            $table->string("email");
            $table->string("password");
            $table->string("phone");
            $table->string("mobile");
            $table->string("pcode");
            $table->text("address1");
            $table->text("address2");
            $table->text("address3");
            $table->string("town");
            $table->string("rand_id");
            $table->integer("is_verify");
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
        Schema::dropIfExists('user_fronts');
    }
}
