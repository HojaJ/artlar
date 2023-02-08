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
            $table->smallInteger('size_length')->nullable();
            $table->smallInteger('size_height')->nullable();

            $table->boolean('signature')->default(false);
            $table->boolean('certificate_of_auth')->default(false);
            $table->boolean('frame')->default(false);


//            $table->integer('material_id')->unsigned()->nullable();

            $table->integer('medium_id')->unsigned()->nullable();
//            $table->integer('movement_id')->unsigned()->nullable();
            $table->integer('rarity_id')->unsigned()->nullable();

            $table->bigInteger('artist_id')->unsigned()->index()->nullable();

            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1);

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

            $table->timestamps();
            $table->softDeletes();


            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('set null');
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
