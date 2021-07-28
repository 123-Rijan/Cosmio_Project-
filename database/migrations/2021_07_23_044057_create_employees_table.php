<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('Company_Id')->unsigned()->index();
            $table->string('Frist_Name');
            $table->string('Last_Name');
            $table->string('Email');
            $table->string('PNumber');
            $table->timestamps();

            $table->foreign('Company_Id')
                ->references('id')->on('companies')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
