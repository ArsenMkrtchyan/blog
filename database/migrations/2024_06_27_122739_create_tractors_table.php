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
        Schema::create('tractors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('features');
            $table->text('text');
            $table->string('image');
            $table->string('enginetype');
            $table->string('ratedengine');
            $table->string('enginespeed');
            $table->string('clutch');
            $table->string('gears');
            $table->string('gearshiftmode');
            $table->string('speedrange');
            $table->string('brake');
            $table->string('rearpto');
            $table->string('liftcapacity');
            $table->string('hydraulic');
            $table->string('dimensions');
            $table->string('wheelbase');
            $table->string('groundclearance');
            $table->string('wheeltrack');
            $table->string('minturningradius');
            $table->string('tyre');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tractors');
    }
};
