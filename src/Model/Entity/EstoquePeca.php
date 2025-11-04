<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EstoquePeca Entity
 *
 * @property int $id_estoque_peca
 * @property int $id_peca
 * @property string $quantidade
 * @property string $estoque_minimo
 * @property string $ponto_reposicao
 * @property string|null $localizacao
 * @property \Cake\I18n\DateTime|null $data_ultima_movimentacao
 * @property string|null $tipo_de_movimentacao
 * @property string $status
 * @property \Cake\I18n\DateTime $data_criacao
 */
class EstoquePeca extends Entity
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
        'id_peca' => true,
        'quantidade' => true,
        'estoque_minimo' => true,
        'ponto_reposicao' => true,
        'localizacao' => true,
        'data_ultima_movimentacao' => true,
        'tipo_de_movimentacao' => true,
        'status' => true,
        'data_criacao' => true,
    ];
}
