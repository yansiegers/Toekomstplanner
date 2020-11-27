<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_texts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->nullable($value = false);
            $table->string('subtitle')->nullable($value = true);
            $table->enum('heading', ['none', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'bold'])->nullable($value = false);
            $table->text('text')->nullable($value = false);
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
        Schema::dropIfExists('page_texts');
    }
}
