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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('material_type', 255);
            $table->string('industry_sector', 255);
            $table->string('base_unit_measure', 255);
            $table->string('material_group', 255);
            $table->date('creation_date');
            $table->string('created_by', 255);
            $table->string('loading_group', 255);
            $table->string('old_material_number', 255);
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
        Schema::dropIfExists('materials');
    }
};
