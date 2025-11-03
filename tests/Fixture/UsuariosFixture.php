<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
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
                'id_usuario' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'senha_hash' => 'Lorem ipsum dolor sit amet',
                'tipo_usuario' => 'Lorem ipsum dolor sit amet',
                'id_maquina_preferida' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'data_criacao' => 1762171548,
            ],
        ];
        parent::init();
    }
}
