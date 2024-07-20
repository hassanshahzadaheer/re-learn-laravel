<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobListingsTagsAndJobTagTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        // Create the job_listing table
        Schema::create('job_listing', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Employer::class);
            $table->string('title');
            $table->string('salary');
            $table->string('location');
            $table->string('time')->default('Full Time');
            $table->string('url');
            $table->string('featured')->default(false);
            $table->timestamps();
        });

        // Create the tags table
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        // Create the job_tag table
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_listing_id')->constrained('job_listing')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('tags')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('job_listing');
    }
}
