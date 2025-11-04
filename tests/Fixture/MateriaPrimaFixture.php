<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MateriaPrimaFixture
 */
class MateriaPrimaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'materia_prima';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_material' => 1,
                'codigo' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet',
                'tipo_material' => 'Lorem ipsum dolor sit amet',
                'unidade_medida' => 'Lorem ipsum dolor ',
                'id_maquina' => 1,
                'data_criacao' => 1762253991,
            ],
        ];
        parent::init();
    }
}
