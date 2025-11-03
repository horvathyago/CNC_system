<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PecasFixture
 */
class PecasFixture extends TestFixture
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
                'id_peca' => 1,
                'codigo' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet',
                'unidade_medida' => 'Lorem ipsum dolor ',
                'tempo_producao_estimado' => 1.5,
                'custo_producao_estimado' => 1.5,
                'id_maquina' => 1,
                'data_criacao' => 1762171562,
            ],
        ];
        parent::init();
    }
}
