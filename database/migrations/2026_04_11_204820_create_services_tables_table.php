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
        Schema::create('services_tables', function (Blueprint $table) {
            $table->id();
            $table->string('Service_name_en' , 255);
            $table->text('Service_overview_en' );
            $table->string('service_cover');
            $table->string('service_location_en' , 255);

            $table->string('Service_name_ar' , 255);
            $table->text('Service_overview_ar' );
            $table->string('service_location_ar' , 255);

            $table->string('Service_name_fr' , 255);
            $table->text('Service_overview_fr' );
            $table->string('service_location_fr' , 255);

            $table->string('Service_name_es' , 255);
            $table->text('Service_overview_es' );
            $table->string('service_location_es' , 255);
            
            $table->string('Service_name_it' , 255);
            $table->text('Service_overview_it' );
            $table->string('service_location_it' , 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_tables');
    }
};
