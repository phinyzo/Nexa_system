<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixNalIdColumnTypeOnUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop foreign key if it exists
            $table->dropForeign(['nal_id']);

            // Change the column type to match BIGINT
            $table->unsignedBigInteger('nal_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('nal_id')->nullable()->change();
        });
    }
}
