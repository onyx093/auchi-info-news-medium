<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('status');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('web_link')->nullable();
            $table->string('lga_id')->nullable();
            $table->string('state_id')->nullable();
            $table->longText('description')->nullable();
            $table->string('facebook_link')->nullable();            
            $table->string('twitter_link')->nullable();            
            $table->string('instagram_link')->nullable();            
            $table->string('youtube_link')->nullable();            
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
        Schema::dropIfExists('admins');
    }
}
