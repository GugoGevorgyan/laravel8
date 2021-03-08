<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()
                ->constrained()
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('user_id')->nullable()
                ->constrained()
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('favorit')->default(false);
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
        Schema::dropIfExists('product_user');
    }
}
