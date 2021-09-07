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
        // Schema::create('projects', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create("projects", function (Blueprint $table) {
            $table->id();
            $table->string("client_name", 255)->nullable();
            $table->string("client_company_name", 255)->nullable();
            $table->string("client_phone", 255)->nullable();
            $table->string("client_email", 255)->nullable();
            $table->string("client_address", 255)->nullable();
            $table->string("project_name", 255)->nullable();
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
