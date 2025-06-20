<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('gallery_items', function (Blueprint $table) {
            // Add image column for file uploads
            $table->string('image')->nullable()->after('title');

            // Make icon nullable since we now have images
            $table->string('icon')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('gallery_items', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->string('icon')->nullable(false)->change();
        });
    }
};
