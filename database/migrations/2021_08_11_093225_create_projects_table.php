<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
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
            $table->string('nomProjet');
            $table->string('equipe');
            $table->string('statut');
            $table->Date('calendrierPlan');
            $table->string('depenses');
            $table->string('effortPrev');
            $table->string('effortRealis');
            $table->Date('dateFin');
            $table->string('JrsRetard');
            $table->string('prob');
            
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
}
