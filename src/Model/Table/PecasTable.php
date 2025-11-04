<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pecas Model
 *
 * @method \App\Model\Entity\Peca newEmptyEntity()
 * @method \App\Model\Entity\Peca newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Peca> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Peca get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Peca findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Peca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Peca> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Peca|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Peca saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Peca>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Peca>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Peca>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Peca> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Peca>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Peca>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Peca>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Peca> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PecasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
    parent::initialize($config);

    $this->setTable('pecas');
    $this->setDisplayField('codigo');
    $this->setPrimaryKey('id_peca');

    // Relação com EstoquePecas
    $this->hasOne('EstoquePecas', [
        'foreignKey' => 'id_peca',
        'dependent' => true, // se deletar a peça, deleta o estoque
    ]);
    }


    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 50)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo')
            ->add('codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('unidade_medida')
            ->maxLength('unidade_medida', 20)
            ->notEmptyString('unidade_medida');

        $validator
            ->decimal('tempo_producao_estimado')
            ->allowEmptyString('tempo_producao_estimado');

        $validator
            ->decimal('custo_producao_estimado')
            ->allowEmptyString('custo_producao_estimado');

        $validator
            ->nonNegativeInteger('id_maquina')
            ->allowEmptyString('id_maquina');

        $validator
            ->dateTime('data_criacao')
            ->notEmptyDateTime('data_criacao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['codigo']), ['errorField' => 'codigo']);

        return $rules;
    }
}
