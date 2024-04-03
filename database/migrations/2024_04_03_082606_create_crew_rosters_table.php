<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crew_rosters', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('rev', 15)->nullable();
            $table->string('dc', 15)->nullable();
            $table->string('ci_l', 15)->nullable();
            $table->string('ci_z', 15)->nullable();
            $table->string('co_l', 15)->nullable();
            $table->string('co_z', 15)->nullable();
            $table->string('activity', 15)->nullable();
            $table->string('remark', 15)->nullable();
            $table->string('from', 15)->nullable();
            $table->string('std_l', 15)->nullable();
            $table->string('std_z', 15)->nullable();
            $table->string('to', 15)->nullable();
            $table->string('sta_l', 15)->nullable();
            $table->string('sta_z', 15)->nullable();
            $table->string('ac_holet', 15)->nullable();
            $table->string('blh', 15)->nullable();
            $table->string('flight_time', 15)->nullable();
            $table->string('night_time', 15)->nullable();
            $table->string('dur', 15)->nullable();
            $table->string('ext', 15)->nullable();
            $table->string('pax_booked', 15)->nullable();
            $table->string('ac_reg', 15)->nullable();
            $table->string('crew_meal', 15)->nullable();
            $table->string('resources', 15)->nullable();
            $table->string('cc', 15)->nullable();
            $table->string('name', 15)->nullable();
            $table->string('pos', 15)->nullable();
            $table->string('work_phone', 15)->nullable();
            $table->string('dh_crew', 15)->nullable();
            $table->string('dh_name', 15)->nullable();
            $table->string('dh_seat', 15)->nullable();
            $table->string('remarks', 15)->nullable();
            $table->string('fdp_time', 15)->nullable();
            $table->string('max_fdp', 15)->nullable();
            $table->string('rest_complish', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crew_rosters');
    }
};
