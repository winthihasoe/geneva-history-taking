<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('babyName');
            $table->integer('age');
            $table->integer('weight');
            $table->string('labour');
            $table->string('address');
            $table->string('phone');
            $table->string('homeOrHospital');
            $table->string('medication');
            $table->string('breastfeeding');
            $table->string('weaning');
            $table->string('bathing');
            $table->string('sleepPattern');
            $table->string('jaundice');
            $table->string('soothe');
            $table->string('infection');
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
        Schema::dropIfExists('child_histories');
    }
}
