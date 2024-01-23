<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
        $table->id();
            $table->string('name_one');
            $table->string('name_two');
            $table->string('sex_one');
            $table->string('sex_two');
            $table->string('sex_three');
            $table->string('email');
            $table->string('tel_one');
            $table->string('tel_two');
            $table->string('tel_three');
            $table->string('address');
            $table->string('address_2');
            $table->string('kids');
            $table->text('content')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
