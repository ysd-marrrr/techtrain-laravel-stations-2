<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionColumnMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('movies', 'published_year')) {
            Schema::table('movies', function (Blueprint $table) {
                $table->integer('published_year');
            });
        }

        if (!Schema::hasColumn('movies', 'is_showing')) {
            Schema::table('movies', function (Blueprint $table) {
                $table->boolean('is_showing');
            });
        }

        if (!Schema::hasColumn('movies', 'description')) {
            Schema::table('movies', function (Blueprint $table) {
                $table->text('description');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('movies', 'published_year')) {
            Schema::table('movies', function(Blueprint $table) {
                $table->dropColumn('published_year');
            });
        }

        if (Schema::hasColumn('movies', 'is_showing')) {
            Schema::table('movies', function(Blueprint $table) {
                $table->dropColumn('is_showing');
            });
        }

        if (Schema::hasColumn('movies', 'description')) {
            Schema::table('movies', function(Blueprint $table) {
                $table->dropColumn('description');
            });
        }
    }
}
