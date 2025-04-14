<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixUsersNalIdColumnForReal extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop FK if it exists (skip errors silently)
            try {
                $table->dropForeign(['nal_id']);
            } catch (\Throwable $e) {
                // Foreign key might not exist yet
            }

            // Drop the column
            if (Schema::hasColumn('users', 'nal_id')) {
                $table->dropColumn('nal_id');
            }
        });

        // Re-add the column as unsignedBigInteger
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
