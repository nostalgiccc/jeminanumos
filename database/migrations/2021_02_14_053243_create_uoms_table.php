<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Uom;

class CreateUomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uoms', function (Blueprint $table) {
            $table->string('id',20);
            $table->string('description',30);
            $table->timestamps();

            $table->primary('id');
        });

        $json = file_get_contents(database_path() . '/uom.json');
        $rows = json_decode($json, true);

        foreach ($rows as $row) {
            Uom::firstOrCreate($row);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uoms');
    }
}
