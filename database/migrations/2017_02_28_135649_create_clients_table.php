<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('first_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('title', 15)->nullable()->default('mr');
            $table->date('birthdate')->nullable()->default(null);
            $table->enum('gender', ['male', 'female'])->nullable()->default('male');
            $table->string('civil_status')->nullable()->default('single');
            $table->string('email', 100)->nullable();
            $table->string('mobile_number', 50)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('town', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('province', 100)->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('profession', 100)->nullable();
            $table->string('nationality', 100)->nullable()->default('Filipino');
            $table->bigInteger('created_by')->nullable()->default(null);
            $table->bigInteger('last_updated_by')->nullable()->default(null);
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
