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
        Schema::create('works', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->nullable();
            $table->smallInteger('year')->nullable();
            $table->string('image')->nullable();
            $table->float('price')->nullable();
            $table->string('size')->nullable();


            $table->integer('material_id')->unsigned()->nullable();
            $table->integer('medium_id')->unsigned()->nullable();
            $table->integer('movement_id')->unsigned()->nullable();
            $table->integer('rarity_id')->unsigned()->nullable();

            $table->text('description')->nullable();

            $table->tinyInteger('status')->default(1);




            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
};
