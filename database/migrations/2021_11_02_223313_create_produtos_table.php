<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->string('slug');
            $table->timestamps();
        });
        DB::table('produtos')->insert(
            [

                array(
                    "nome"=> "Tradicional",
                    "descricao"=> "Imagina aquele café da manhã, sentado em uma mesa olhando para as montanhas. É isso que você vai sentir quando estiver saboreando estes deliciosos pãezinhos.",
                    "slug"=> "pao-tradicional"
                ),
                array(
                    "nome"=> "Alho",
                    "descricao"=> "Gente, imagina esse pãozinho,  no tamanho exato para comê-lo de uma vez só. 'Ôooo trem bom sô'!",
                    // "imagem_url"=> "img/produtos/pao-alho.JPG",
                    "slug"=> "pao-alho"
                ),
                array(
                    "nome"=> "Doce de Leite",
                    "descricao"=> "Pães de Queijo recheados com Leite Condensado Cozido. Gente, é SUPER SABOROSO. Um sabor único!",
                    // "imagem_url"=> "img/produtos/doce-leite.JPG",
                    "slug"=> "pao-doce-leite"
                ),
                array(
                    "nome"=> "Catupiry",
                    "descricao"=> "1 quilo de pura delícia. Acho que vai ter disputa pelo último...",
                    // "imagem_url"=> "img/produtos/catupiry.JPG",
                    "slug"=> "pao-catupiry"
                ),
                array(
                    "nome"=> "Nutella",
                    "descricao"=> "É 1 quilo de um delicioso Pão de Queijo e pode acreditar, vai ter o gostinho de quero mais!",
                    // "imagem_url"=> "img/produtos/nutella.JPG",
                    "slug"=> "pao-nutella"
                ),
                array(
                    "nome"=> "Goiabada",
                    "descricao"=> "Um sabor excepcional em sua mesa. Pãozinho de sabor inconfundível. Tenho certeza que irá amar e reconhecido já pelo aroma deixado no ar.",
                    // "imagem_url"=> "img/produtos/pao-goiabada.JPG",
                    "slug"=> "pao-goiabada"
                ),
                array(
                    "nome"=> "Cheddar",
                    "descricao"=> " Estes pãezinhos têm uma personalidade forte e marcante do cheddar.",
                    // "imagem_url"=> "img/produtos/pao-cheddar.jpg",
                    "slug"=> "pao-cheddar"
                ),
                array(
                    "nome"=> "Bacon",
                    "descricao"=> "Pensa comigo, geralmente no café da manhã se escuta muito em fazer ovos com bacon. Mas, você já provou o Pão de Queijo Com Bacon?",
                    // "imagem_url"=> "img/produtos/pao-bacon.JPG",
                    "slug"=> "pao-bacon"
                ),

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
        Schema::dropIfExists('produtos');
    }
}
