<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmantIdeasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investmant_ideas_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('investmant_idea');
            $table->string('abstract');
            $table->string('product');
            $table->string('risk');
            $table->string('date');
            $table->integer('rm_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investmant_ideas_tables');
    }
}
