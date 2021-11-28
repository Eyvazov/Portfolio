<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('settings_id')->constrained()->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('title', '150')->nullable()->default('Azad Eyvazov');
            $table->longText('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('author')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_text')->nullable();
            $table->timestamps();

            $table->unique(['settings_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_translations');
    }
}
