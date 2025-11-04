<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MateriaPrima Model
 *
 * @method \App\Model\Entity\MateriaPrima newEmptyEntity()
 * @method \App\Model\Entity\MateriaPrima newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\MateriaPrima> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MateriaPrima get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\MateriaPrima findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\MateriaPrima patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\MateriaPrima> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MateriaPrima|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\MateriaPrima saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\MateriaPrima>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MateriaPrima>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MateriaPrima>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MateriaPrima> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MateriaPrima>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MateriaPrima>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\MateriaPrima>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\MateriaPrima> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MateriaPrimaTable extends Table
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

    $this->setTable('materia_prima');
    $this->setDisplayField('codigo');
    $this->setPrimaryKey('id_material');

    // Relação com EstoqueMateriaPrima
    $this->hasOne('EstoqueMateriaPrima', [
        'foreignKey' => 'id_material',
        'dependent' => true,
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
            ->scalar('tipo_material')
            ->requirePresence('tipo_material', 'create')
            ->notEmptyString('tipo_material');

        $validator
            ->scalar('unidade_medida')
            ->maxLength('unidade_medida', 20)
            ->requirePresence('unidade_medida', 'create')
            ->notEmptyString('unidade_medida');

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
