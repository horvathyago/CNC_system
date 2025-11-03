<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id_usuario
 * @property string $nome
 * @property string $email
 * @property string $senha_hash
 * @property string $tipo_usuario
 * @property int|null $id_maquina_preferida
 * @property string $status
 * @property \Cake\I18n\DateTime $data_criacao
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nome' => true,
        'email' => true,
        'senha_hash' => true,
        'tipo_usuario' => true,
        'id_maquina_preferida' => true,
        'status' => true,
        'data_criacao' => true,
    ];
}
