<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('iqreable__qr_translations', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      // Your translatable fields
      $table->text('title');
      $table->integer('qr_id')->unsigned();
      $table->string('locale')->index();
      $table->unique(['qr_id', 'locale']);
      $table->foreign('qr_id')->references('id')->on('iqreable__qrs')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('iqreable__qr_translations', function (Blueprint $table) {
      $table->dropForeign(['qr_id']);
    });
    Schema::dropIfExists('iqreable__qr_translations');
  }
};
