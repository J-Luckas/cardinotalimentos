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
            $table->boolean('seo_og_image')->default(false);
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->timestamps();
        });

        DB::table('foto_produtos')->insert(
            [
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional-seo.png',
                    'produto_id' => 1,
                    'seo_og_image' => true
                ),
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional1.webp',
                    'produto_id' => 1,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional2.webp',
                    'produto_id' => 1,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional3.webp',
                    'produto_id' => 1,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-tradicional/pao-tradicional4.webp',
                    'produto_id' => 1,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho-seo.png',
                    'produto_id' => 2,
                    'seo_og_image' => true
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho1.webp',
                    'produto_id' => 2,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho2.webp',
                    'produto_id' => 2,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho3.webp',
                    'produto_id' => 2,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-alho/pao-alho4.webp',
                    'produto_id' => 2,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite-seo.png',
                    'produto_id' => 3,
                    'seo_og_image' => true
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite1.webp',
                    'produto_id' => 3,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite2.webp',
                    'produto_id' => 3,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite3.webp',
                    'produto_id' => 3,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-doce-leite/doce-leite4.webp',
                    'produto_id' => 3,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry-seo.png',
                    'produto_id' => 4,
                    'seo_og_image' => true
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry1.webp',
                    'produto_id' => 4,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry2.webp',
                    'produto_id' => 4,
                    'seo_og_image' => false
                ),
                // array(
                //     'url' => 'img/produtos/pao-catupiry/catupiry3.webp',
                //     'produto_id' => 4
                // ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry4.webp',
                    'produto_id' => 4,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry5.webp',
                    'produto_id' => 4,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry6.webp',
                    'produto_id' => 4,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry7.webp',
                    'produto_id' => 4,
                    'seo_og_image' => false
                ),
                // array(
                //     'url' => 'img/produtos/pao-catupiry/catupiry8.webp',
                //     'produto_id' => 4
                // ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry9.webp',
                    'produto_id' => 4,
                    'seo_og_image' => false
                ),
                // array(
                //     'url' => 'img/produtos/pao-catupiry/catupiry10.webp',
                //     'produto_id' => 4
                // ),
                array(
                    'url' => 'img/produtos/pao-catupiry/catupiry11.webp',
                    'produto_id' => 4,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nuttela-seo.png',
                    'produto_id' => 5,
                    'seo_og_image' => true
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella1.webp',
                    'produto_id' => 5,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella2.webp',
                    'produto_id' => 5,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella3.webp',
                    'produto_id' => 5,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella4.webp',
                    'produto_id' => 5,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella5.webp',
                    'produto_id' => 5,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-nutella/nutella6.webp',
                    'produto_id' => 5,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada-seo.png',
                    'produto_id' => 6,
                    'seo_og_image' => true
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada1.webp',
                    'produto_id' => 6,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada2.webp',
                    'produto_id' => 6,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada3.webp',
                    'produto_id' => 6,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada4.webp',
                    'produto_id' => 6,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada5.webp',
                    'produto_id' => 6,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-goiabada/goiabada6.webp',
                    'produto_id' => 6,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar-seo.png',
                    'produto_id' => 7,
                    'seo_og_image' => true
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar2.webp',
                    'produto_id' => 7,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar3.webp',
                    'produto_id' => 7,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar4.webp',
                    'produto_id' => 7,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar5.webp',
                    'produto_id' => 7,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-cheddar/pao-cheddar6.webp',
                    'produto_id' => 7,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon-seo.png',
                    'produto_id' => 8,
                    'seo_og_image' => true
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon1.webp',
                    'produto_id' => 8,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon2.webp',
                    'produto_id' => 8,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon3.webp',
                    'produto_id' => 8,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon4.webp',
                    'produto_id' => 8,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon5.webp',
                    'produto_id' => 8,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon6.webp',
                    'produto_id' => 8,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon7.webp',
                    'produto_id' => 8,
                    'seo_og_image' => false
                ),
                array(
                    'url' => 'img/produtos/pao-bacon/pao-bacon8.webp',
                    'produto_id' => 8,
                    'seo_og_image' => false
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
