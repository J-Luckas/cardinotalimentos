<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_produtos', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->timestamps();
        });

        DB::table('foto_produtos')->insert(
            [
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional1.JPG',
                    'produto_id' => 1
                ),
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional2.JPG',
                    'produto_id' => 1
                ),
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional3.JPG',
                    'produto_id' => 1
                ),
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional4.JPG',
                    'produto_id' => 1
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho1.JPG',
                    'produto_id' => 2
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho2.JPG',
                    'produto_id' => 2
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho3.JPG',
                    'produto_id' => 2
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho4.JPG',
                    'produto_id' => 2
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite1.JPG',
                    'produto_id' => 3
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite2.JPG',
                    'produto_id' => 3
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite3.JPG',
                    'produto_id' => 3
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite4.JPG',
                    'produto_id' => 3
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry1.JPG',
                    'produto_id' => 4
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry2.JPG',
                    'produto_id' => 4
                ),
                // array(
                //     'url' => 'img/produtos/pao-catupiry/catupiry3.JPG',
                //     'produto_id' => 4
                // ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry4.JPG',
                    'produto_id' => 4
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry5.JPG',
                    'produto_id' => 4
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry6.JPG',
                    'produto_id' => 4
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry7.JPG',
                    'produto_id' => 4
                ),
                // array(
                //     'url' => 'img/produtos/pao-catupiry/catupiry8.JPG',
                //     'produto_id' => 4
                // ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry9.JPG',
                    'produto_id' => 4
                ),
                // array(
                //     'url' => 'img/produtos/pao-catupiry/catupiry10.JPG',
                //     'produto_id' => 4
                // ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry11.JPG',
                    'produto_id' => 4
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella1.JPG',
                    'produto_id' => 5
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella2.JPG',
                    'produto_id' => 5
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella3.JPG',
                    'produto_id' => 5
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella4.JPG',
                    'produto_id' => 5
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella5.JPG',
                    'produto_id' => 5
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella6.JPG',
                    'produto_id' => 5
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada1.JPG',
                    'produto_id' => 6
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada2.JPG',
                    'produto_id' => 6
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada3.JPG',
                    'produto_id' => 6
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada4.JPG',
                    'produto_id' => 6
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada5.JPG',
                    'produto_id' => 6
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada6.JPG',
                    'produto_id' => 6
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar1.JPG',
                    'produto_id' => 7
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar2.JPG',
                    'produto_id' => 7
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar3.JPG',
                    'produto_id' => 7
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar4.JPG',
                    'produto_id' => 7
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar5.JPG',
                    'produto_id' => 7
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar6.JPG',
                    'produto_id' => 7
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon1.JPG',
                    'produto_id' => 8
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon2.JPG',
                    'produto_id' => 8
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon3.JPG',
                    'produto_id' => 8
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon4.JPG',
                    'produto_id' => 8
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon5.JPG',
                    'produto_id' => 8
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon6.JPG',
                    'produto_id' => 8
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon7.JPG',
                    'produto_id' => 8
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon8.JPG',
                    'produto_id' => 8
                )
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto_produtos');
    }
}
