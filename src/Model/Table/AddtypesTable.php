<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Addtypes Model
 *
 * @method \App\Model\Entity\Addtype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Addtype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Addtype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Addtype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Addtype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Addtype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Addtype findOrCreate($search, callable $callback = null, $options = [])
 */
class AddtypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('addtypes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->belongsTo('Sessions', [
            'foreignKey' => 'session_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('session_Id')
            ->requirePresence('session_Id', 'create')
            ->notEmpty('session_Id');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        return $validator;
    }
}
