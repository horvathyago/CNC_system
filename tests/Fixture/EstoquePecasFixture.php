<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstoquePecasFixture
 */
class EstoquePecasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_estoque_peca' => 1,
                'id_peca' => 1,
                'quantidade' => 1.5,
                'estoque_minimo' => 1.5,
                'ponto_reposicao' => 1.5,
                'localizacao' => 'Lorem ipsum dolor sit amet',
                'data_ultima_movimentacao' => 1762254034,
                'tipo_de_movimentacao' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'data_criacao' => 1762254034,
            ],
        ];
        parent::init();
    }
}
