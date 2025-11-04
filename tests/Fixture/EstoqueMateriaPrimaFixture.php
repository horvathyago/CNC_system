<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstoqueMateriaPrimaFixture
 */
class EstoqueMateriaPrimaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'estoque_materia_prima';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_estoque_mp' => 1,
                'id_material' => 1,
                'id_maquina' => 1,
                'quantidade' => 1.5,
                'estoque_minimo' => 1.5,
                'localizacao_fisica' => 'Lorem ipsum dolor sit amet',
                'data_ultima_movimentacao' => 1762254017,
                'tipo_de_movimentacao' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'data_criacao' => 1762254017,
            ],
        ];
        parent::init();
    }
}
