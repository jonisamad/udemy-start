<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBlogspotsTableName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('blogpost', function (Blueprint $table) {
        //     //
        // });
        Schema::rename('blogspots', 'blog_spots');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('blogpost', function (Blueprint $table) {
        //     //
        // });
        Schema::rename('blog_spots','blogspots');
    }
}
