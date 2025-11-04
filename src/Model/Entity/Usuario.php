<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

class Usuario extends Entity
{
    protected array $_accessible = [
        'nome' => true,
        'email' => true,
        'senha_hash' => true,
        'tipo_usuario' => true,
        'id_maquina_preferida' => true,
        'status' => true,
        'data_criacao' => true,
    ];

    protected array $_hidden = [
        'senha_hash',
    ];

    /**
     * Criptografa a senha ao salvar
     */
    protected function _setSenhaHash($senha_hash)
    {
        if (strlen($senha_hash) > 0) {
            return (new DefaultPasswordHasher())->hash($senha_hash);
        }
    }

    /**
     * Verifica a senha informada com o hash salvo
     */
    public function verificarSenha($senha)
    {
        if (empty($this->senha_hash)) {
            return false;
        }

        return (new DefaultPasswordHasher())->check($senha, $this->senha_hash);
    }
}
