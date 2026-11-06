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
        Schema::table('students', function (Blueprint $table) {
            if(Schema::hasColumn('student', 'class')) {
                $table->dropColumn('class');
            }
            if(Schema::hasColumn('student', 'major')) {
                $table->dropColumn('major');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            if(Schema::hasColumn('student', 'class')) {
                $table->string('class')->after('major');
            }
            if(Schema::hasColumn('student', 'major')) {
                $table->string('major')->after('gender');
            }
        });
    }
};
