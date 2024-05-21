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
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('class_id')->after('nis')->required();

            // Foreign key ke kolum mana, refencenya apa dan dari table mana
            $table->foreign('class_id')->references('id')->on('class')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            /*
                klo mau rollback sebuah column foreign key
                maka kita perlu delete forieng keynya terlebih daulu
                kemudian drop columnya
            */
            $table->dropForeign(['class_id']);
            $table->dropColumn('class_id');
        });
    }
};
