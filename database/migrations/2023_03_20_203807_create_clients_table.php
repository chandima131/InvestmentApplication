<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('client_id');
            $table->timestamps();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('age');
            $table->string('account_detail');
            $table->string('address');
            $table->unsignedBigInteger('investment_suggestion');
            // $table->foreignId('investment_suggestion')->nullable()->constrained();
            $table->string('risk_rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
