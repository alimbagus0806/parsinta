<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMarkToTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task', function (Blueprint $table) {
            //misal mas mau tambah column data di task
            $table->string('data')->default('Lorem Ipsum');
            //di tambah datanya. migration urutan nya penting mas dari atas ke bawah
            //pshsm mas? ok dicerna dlu/ misal mau tambah mark lagi
            //udah paham mas? misal di reset kn, trs migrate lg, tu kok udah otomatis kluar add mark n dropp nya? padahal d awal kn ga gitu
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task', function (Blueprint $table) {
            //
        });
    }
}
