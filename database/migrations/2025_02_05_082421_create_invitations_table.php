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
      $table->string('bride_fullname');
      $table->string('groom_fullname');
      $table->string('bride_parent');
      $table->string('groom_parent');
      $table->string('bride_photo');
      $table->string('groom_photo');
      $table->date('date');
      $table->string('time');
      $table->string('location');
      $table->string('address');
      $table->string('video');
      $table->string('theme');
      $table->enum('status', ['pending', 'paid', 'published', 'cancelled'])->default('pending');
      $table->string('receipt')->nullable();
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
