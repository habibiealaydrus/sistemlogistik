<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengirimanpaket', function (Blueprint $table) {
            $table->id();
            $table->string('namapengirim',255);
            $table->string('alamatpengirim');
            $table->string('kontakpengirim');
            $table->string('namapenerima',255);
            $table->string('alamatpenerima');
            $table->string('beratbarang');
            $table->string('lebarbarang');
            $table->string('panjangbarang');
            $table->string('jeniskiriman');
            $table->string('biaya');
            $table->string('statuskiriman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengirimanpaket');
    }
};
