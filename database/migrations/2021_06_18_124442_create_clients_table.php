<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100); 
            $table->date('birth_date'); 
            $table->char('sex', 1);
            $table->string('zip_code', 9)->nullable(); 
            $table->string('address', 100)->nullable(); 
            $table->string('address_number', 5)->nullable();
            $table->string('address_complement', 100)->nullable(); 
            $table->string('district', 100)->nullable(); 
            $table->string('state', 100)->nullable(); 
            $table->string('city', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
