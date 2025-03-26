<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name')->after('id'); // `id` ustunidan keyin qo‘shiladi
        });
    }
    
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
    
};
