<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('patientName');
            $table->integer('age');
            $table->string('disease');
            $table->integer('weight');
            $table->string('address');
            $table->string('phone');
            $table->string('homeOrHospital');
            $table->string('medication');
            $table->string('canula');
            $table->string('ryleTube');
            $table->string('catheter');
            $table->string('suction');
            $table->string('drip');
            $table->string('insulin');
            $table->string('rbs');
            $table->string('allergy');
            $table->string('caregiverName');
            $table->string("level");
            $table->longText("do_donts");
            $table->longText("note_to_cg");
            $table->string("start_at");
            $table->string("end_at");
            $table->string("duty");
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
        Schema::dropIfExists('histories');
    }
}
