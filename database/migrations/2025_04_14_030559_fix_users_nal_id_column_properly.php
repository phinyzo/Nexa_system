<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixUsersNalIdColumnProperly extends Migration
{
    public function up()
    {
        // Drop foreign key if it exists
        Schema::table('users', function (Blueprint $table) {
            try {
                $table->dropForeign(['nal_id']);
            } catch (\Exception $e) {
                // Ignore if already dropped
            }

            if (Schema::hasColumn('users', 'nal_id')) {
                $table->dropColumn('nal_id');
            }
        });

        // Re-add the column with correct type
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('nal_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nal_id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('nal_id')->nullable();
        });
    }
}
