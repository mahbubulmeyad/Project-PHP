<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->string('title')->after('id');
            $table->text('description')->after('title');
            $table->dropColumn('task'); // Remove the old task column if it exists
        });
    }

    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->dropColumn(['title', 'description']);
            $table->string('task'); // Add back the task column if needed
        });
    }
};
