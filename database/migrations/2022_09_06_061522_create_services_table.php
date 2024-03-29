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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_thamble');
            $table->string('breadcrumb');
            $table->string('content_title');
            $table->string('content_descrip');
            $table->string('long_descrip');
            $table->string('thamble');
            $table->integer('status')->default(0);
            
            $table->string('detail_short_title');
            $table->string('category_name');
            $table->string('detail_short_desc');
            $table->string('detail_project_name');
            $table->string('detail_project_desc');
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
        Schema::dropIfExists('services');
    }
};
