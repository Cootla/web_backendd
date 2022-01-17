<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsAgenttsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients__agentts', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            //$table->foreign('username')->references('id')->on('clients')->onDelete('cascade');
            $table->string('product');
            //$table->binary('product_image');
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
       $table->dropForeign('clients__agentts_sourceId_foreign');
       $table->dropForeign('clients__agentts_targetId_foreign');
       Schema::dropIfExists('clients__agentts');
    }
}
