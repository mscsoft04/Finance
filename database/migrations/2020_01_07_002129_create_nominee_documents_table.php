<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomineeDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominee_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nominee_id');
            $table->foreign('nominee_id')->references('id')->on('nominee_details');
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')->references('id')->on('document_types');
            $table->date('document_date');
            $table->text('document');
            $table->string('document_number');
            $table->text('remarks')->nullable();
            $table->integer('created_by')->length(11);	
            $table->integer('updated_by')->length(11)->nullable();
            $table->enum('status', ['0', '1','3','4'])->default('0');
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
        Schema::dropIfExists('nominee_documents');
    }
}
