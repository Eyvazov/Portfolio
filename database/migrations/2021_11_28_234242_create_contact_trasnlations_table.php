<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTrasnlationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_trasnlations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->foreignId('contact_id')->constrained()->onDelete('cascade');
            $table->string('title', '150')->nullable();
            $table->longText('text')->nullable();
            $table->timestamps();

            $table->unique(['locale', 'contact_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_trasnlations');
    }
}
