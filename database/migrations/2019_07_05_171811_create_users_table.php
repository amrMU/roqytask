<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();

            $table->BigInteger('administration_group_id')->nullable()->unsigned()->default(null);
            $table->foreign('administration_group_id')->references('id')->on('administration_group')->onDelete('set null');

            $table->timestamp('email_verified_at')->nullable();
          
            $table->enum('type_user',['user','admin']);
            $table->string('image')->default('img/avatar.png');
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
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
}
