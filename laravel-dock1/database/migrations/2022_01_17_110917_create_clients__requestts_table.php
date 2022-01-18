<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsRequesttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients__requestts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientId');
            $table->foreign('clientId')->references('id')->on('clients')->onDelete('cascade');
            $table->longText('message')->nullable();
            //$table->string('image')->nullable();
            
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
       $table->dropForeign('clients__requestts_clientId_foreign');
       Schema::dropIfExists('clients__requestts');
    }
}
