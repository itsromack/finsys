<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statement_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_id')->nullable()->default(null);
            $table->string('sa_number', 20)->nullable()->default(null);
            $table->string('or_number', 20)->nullable()->default(null);
            $table->date('transaction_date')->nullable()->default(null);
            $table->integer('pax')->nullable()->default(null);
            $table->string('currency', 5)->nullable()->default('PHP');
            $table->double('amount')->nullable()->default(null);
            $table->string('payment_mode', 20)->nullable()->default('CASH');
            $table->string('transaction_type', 20)->nullable()->default('WALK IN');
            $table->string('client_type', 5)->nullable()->default('B');
            $table->text('details')->nullable()->default(null);
            $table->text('staff_notes')->nullable()->default(null);
            $table->integer('recorded_by')->nullable()->default(null);
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
        Schema::dropIfExists('statement_accounts');
    }
}
