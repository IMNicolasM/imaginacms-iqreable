<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIqreableQrsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('iqreable__qrs', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      // Your fields...
      $table->text('content');
      $table->string('entity_type')->nullable();
      $table->integer('entity_id')->unsigned()->nullable();
      $table->string('zone')->nullable();
      $table->longText('base_64');
      // Audit fields
      $table->timestamps();
      $table->auditStamps();
      // Unique key constraint on entity_type, entity_id, and zone
      $table->unique(['entity_type', 'entity_id', 'zone']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('iqreable__qrs');
  }
}
