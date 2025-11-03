<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Maquinas Model
 *
 * @method \App\Model\Entity\Maquina newEmptyEntity()
 * @method \App\Model\Entity\Maquina newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Maquina> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Maquina get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Maquina findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Maquina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Maquina> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Maquina|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Maquina saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Maquina>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Maquina>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Maquina>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Maquina> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Maquina>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Maquina>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Maquina>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Maquina> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MaquinasTable extends Table
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

        $this->setTable('maquinas');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id_maquina');
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome')
            ->add('nome', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

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
        $rules->add($rules->isUnique(['nome']), ['errorField' => 'nome']);

        return $rules;
    }
}
