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
        Schema::create('document_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('category_id');
            $table->bigInteger('subcategory_id');
            $table->string('document_name');
            $table->string('image');
            $table->string('pdf');
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('document_centers');
    }
};
