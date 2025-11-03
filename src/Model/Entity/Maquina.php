<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maquina Entity
 *
 * @property int $id_maquina
 * @property string $nome
 * @property string $tipo
 * @property string $status
 * @property \Cake\I18n\DateTime $data_criacao
 */
class Maquina extends Entity
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
        'tipo' => true,
        'status' => true,
        'data_criacao' => true,
    ];
}
