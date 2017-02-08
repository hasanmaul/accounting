    <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerimaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('nama_penerima');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('nama_perusahaan');
            $table->string('no_tlp');
            $table->enum('jenis_rek', ['BCA','Mandiri','BRI']);
            $table->integer('jumlah');   
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
        Schema::drop('penerimaans');
    }
}
