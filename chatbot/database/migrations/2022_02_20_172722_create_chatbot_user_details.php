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
        Schema::create('chatbot_user_details', function (Blueprint $table) {
            $table->id();
            $table->string('actual_address')->nullable();
            $table->string('actual_data_lat')->nullable();
            $table->string('actual_data_long')->nullable();
            $table->string('diff_actual_given')->nullable();
            $table->string('selfie_path')->nullable();
            $table->string('map_screenshot')->nullable();
            $table->string('pdf_path')->nullable();
            $table->integer('record_status')->nullable();
            $table->string('addr_proof')->nullable();
            $table->string('id_proof')->nullable();
            $table->string('signature')->nullable();
            $table->string('period_of_stay')->nullable();
            $table->string('residential_type')->nullable();
            $table->string('address_type')->nullable();
            $table->string('respondent_name_and_relation_with_candidate')->nullable();
            $table->timestamps();
            $table->datetime('verified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatbot_user_details');
    }
};
