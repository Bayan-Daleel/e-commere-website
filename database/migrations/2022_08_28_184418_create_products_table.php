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
        Schema::create('products', function (Blueprint $table) {
         $table->id();
        $table->string('name');
        $table->string('slug')->unique();
        $table->unsignedInteger('price');
        $table->string('photo');
        $table->text('description');
        $table->unsignedInteger('no-pieces');
        //$table->foreignId('category_id')->constrained()->cascadeOnDelete();
        $table->timestamps();
        $table->unsignedBigInteger('category_id');
        $table->foreign('category_id')
            ->references('id')
            ->on('categories')->cascadeOnDelete();
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
