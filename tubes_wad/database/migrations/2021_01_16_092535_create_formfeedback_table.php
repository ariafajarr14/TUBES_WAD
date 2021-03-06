<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormfeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formfeedback', function (Blueprint $table) {
            $table->id();
            $table->string('namaDokter');
            $table->string('pesan');
            $table->string('saranObat');
            $table->string('periksaLanjut');
            $table->timestamp('dibuat')->useCurrent();
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
        Schema::dropIfExists('formfeedback');
    }
}
