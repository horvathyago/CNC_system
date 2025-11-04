<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstoquePecas Model
 *
 * @method \App\Model\Entity\EstoquePeca newEmptyEntity()
 * @method \App\Model\Entity\EstoquePeca newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\EstoquePeca> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstoquePeca get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\EstoquePeca findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\EstoquePeca patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\EstoquePeca> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstoquePeca|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\EstoquePeca saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\EstoquePeca>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\EstoquePeca>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\EstoquePeca>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\EstoquePeca> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\EstoquePeca>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\EstoquePeca>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\EstoquePeca>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\EstoquePeca> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EstoquePecasTable extends Table
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

        $this->setTable('estoque_pecas');
        $this->setDisplayField('status');
        $this->setPrimaryKey('id_estoque_peca');
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
            ->nonNegativeInteger('id_peca')
            ->requirePresence('id_peca', 'create')
            ->notEmptyString('id_peca');

        $validator
            ->decimal('quantidade')
            ->notEmptyString('quantidade');

        $validator
            ->decimal('estoque_minimo')
            ->notEmptyString('estoque_minimo');

        $validator
            ->decimal('ponto_reposicao')
            ->notEmptyString('ponto_reposicao');

        $validator
            ->scalar('localizacao')
            ->maxLength('localizacao', 100)
            ->allowEmptyString('localizacao');

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
        $rules->add($rules->isUnique(['id_peca', 'localizacao'], ['allowMultipleNulls' => true]), ['errorField' => 'id_peca']);

        return $rules;
    }
}
