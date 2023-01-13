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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('surname')->nullable();
            $table->date('dob')->nullable();
            $table->string('image')->nullable();

            $table->string('slug')->nullable();

            $table->integer('profession_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();

            $table->text('biography')->nullable();
            $table->text('cv')->nullable();

            $table->tinyInteger('alive')->default(1);

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
        Schema::dropIfExists('artists');
    }
};
