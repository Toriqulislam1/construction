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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail_img');
            $table->string('thum_project_name');
            $table->string('thum_project_title');
            $table->string('details_banner');
            $table->string('category_name');
            $table->string('customer_name');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('rating');
            $table->string('details_title');
            $table->string('long_desc');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('projects');
    }
};
