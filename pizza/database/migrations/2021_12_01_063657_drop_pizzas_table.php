<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::drop('pizzas');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title');
            $table->string('ingredients');
            $table->string('email');
            $table->timestamp('created_at')->useCurrent();
        });
    }
}
