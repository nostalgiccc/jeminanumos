<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->string('id', 20);
            $table->string('stock_category_id',20);

            $table->foreign('stock_category_id')->references('id')->on('stock_categories');
            $table->string('description', 50);
            $table->string('uom', 20);
            $table->string('barcode', 50)->nullable();
            $table->enum('discontinued', ['Y', 'N'])->default('N');
            $table->text('photo_path')->nullable();

            $table->primary('id');
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
        Schema::dropIfExists('stocks');
    }
}
