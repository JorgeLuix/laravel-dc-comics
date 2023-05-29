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
        Schema::create('comics_', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
			$table->text('description');
            $table->string('thumb');
            $table->decimal('price', 8, 2);
            $table->string('series', 50);
			$table->date('sale_date', );
			$table->string('type', 20);
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
        Schema::dropIfExists('comics_');
    }
};
