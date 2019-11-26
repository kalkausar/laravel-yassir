<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Portofolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_portofolios', function (Blueprint $table){
          $table->bigIncrements('id');
          $table->string('icon');
          $table->string('title');
          $table->string('content');

          $table->timestamps();
        });

        DB::table('tb_portofolios')->insert([
        'icon' => 'add_alert',
        'title' => 'Lorem Ipsum',
        'content'=> 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('tb_portofolios');
    }
}
