<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstoqueMateriaPrima Model
 *
 * @method \App\Model\Entity\EstoqueMateriaPrima newEmptyEntity()
 * @method \App\Model\Entity\EstoqueMateriaPrima newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\EstoqueMateriaPrima> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstoqueMateriaPrima get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\EstoqueMateriaPrima findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\EstoqueMateriaPrima patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\EstoqueMateriaPrima> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstoqueMateriaPrima|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\EstoqueMateriaPrima saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\EstoqueMateriaPrima>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\EstoqueMateriaPrima>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\EstoqueMateriaPrima>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\EstoqueMateriaPrima> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\EstoqueMateriaPrima>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\EstoqueMateriaPrima>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\EstoqueMateriaPrima>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\EstoqueMateriaPrima> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EstoqueMateriaPrimaTable extends Table
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

        $this->setTable('estoque_materia_prima');
        $this->setDisplayField('status');
        $this->setPrimaryKey('id_estoque_mp');
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
            ->nonNegativeInteger('id_material')
            ->requirePresence('id_material', 'create')
            ->notEmptyString('id_material');

        $validator
            ->nonNegativeInteger('id_maquina')
            ->requirePresence('id_maquina', 'create')
            ->notEmptyString('id_maquina');

        $validator
            ->decimal('quantidade')
            ->notEmptyString('quantidade');

        $validator
            ->decimal('estoque_minimo')
            ->notEmptyString('estoque_minimo');

        $validator
            ->scalar('localizacao_fisica')
            ->maxLength('localizacao_fisica', 100)
            ->allowEmptyString('localizacao_fisica');

        $validator
            ->dateTime('data_ultima_movimentacao')
            ->allowEmptyDateTime('data_ultima_movimentacao');

        $validator
            ->scalar('tipo_de_movimentacao')
            ->allowEmptyString('tipo_de_movimentacao');

        $validator
            ->scalar('status')
            ->notEmptyString('status');

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
        $rules->add($rules->isUnique(['id_material', 'id_maquina']), ['errorField' => 'id_material']);

        return $rules;
    }
}
