<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Treatments Model
 *
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\HasMany $Consultations
 * @property \App\Model\Table\RecipesTable|\Cake\ORM\Association\HasMany $Recipes
 *
 * @method \App\Model\Entity\Treatment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Treatment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Treatment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Treatment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Treatment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Treatment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Treatment findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TreatmentsTable extends Table
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

        $this->setTable('treatments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Consultations', [
            'foreignKey' => 'treatment_id'
        ]);
        $this->hasMany('Recipes', [
            'foreignKey' => 'treatment_id'
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->decimal('total_cost')
            ->requirePresence('total_cost', 'create')
            ->notEmpty('total_cost');

        return $validator;
    }
}
