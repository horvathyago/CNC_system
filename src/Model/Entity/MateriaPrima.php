<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MateriaPrima Entity
 *
 * @property int $id_material
 * @property string $codigo
 * @property string $descricao
 * @property string $tipo_material
 * @property string $unidade_medida
 * @property int|null $id_maquina
 * @property \Cake\I18n\DateTime $data_criacao
 */
class MateriaPrima extends Entity
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
        'codigo' => true,
        'descricao' => true,
        'tipo_material' => true,
        'unidade_medida' => true,
        'id_maquina' => true,
        'data_criacao' => true,
    ];
}
