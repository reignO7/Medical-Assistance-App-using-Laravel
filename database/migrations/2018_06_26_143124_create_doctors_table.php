<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('expertise');
            // $table->enum('expertise', ['Allergists/Immunologists', 'Anesthesiologists', 'Cardiologists', 'Colon and Rectal Surgeons', 'Critical Care Medicine Specialists', 'Dermatologists', 'Endocrinologists', 'Emergency Medicine Specialists', 'Family Physicians', 'Gastroenterologists', 'Geriatric Medicine Specialists', 'Hematologists', 'Hospice and Palliative Medicine Specialists', 'Infectious Disease Specialists', 'Internists', 'Medical Geneticists', 'Nephrologists', 'Neurologists', 'Obstetricians and Gynecologists', 'Oncologists', 'Ophthalmologists', 'Osteopaths', 'Otolaryngologists', 'Pathologists', 'Pediatricians', 'Physiatrists', 'Plastic Surgeons', 'Podiatrists', 'Preventive Medicine Specialists', 'Psychiatrists', 'Pulmonologists', 'Radiologists', 'Rheumatologists', 'Sleep Medicine Specialists', 'Sports Medicine Specialists', 'General Surgeons', 'Urologists']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
