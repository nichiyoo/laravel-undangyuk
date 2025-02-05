<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('invitations', function (Blueprint $table) {
      $table->id();
      $table->string('bride_name');
      $table->string('groom_name');
      $table->string('bride_parent_name');
      $table->string('groom_parent_name');
      $table->date('date');
      $table->string('location');
      $table->string('time');
      $table->string('theme');
      $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('invitations');
  }
};
