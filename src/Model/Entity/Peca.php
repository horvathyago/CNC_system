<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Peca Entity
 *
 * @property int $id_peca
 * @property string $codigo
 * @property string $descricao
 * @property string $unidade_medida
 * @property string|null $tempo_producao_estimado
 * @property string|null $custo_producao_estimado
 * @property int|null $id_maquina
 * @property \Cake\I18n\DateTime $data_criacao
 */
class Peca extends Entity
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
        'unidade_medida' => true,
        'tempo_producao_estimado' => true,
        'custo_producao_estimado' => true,
        'id_maquina' => true,
        'data_criacao' => true,
    ];
}
