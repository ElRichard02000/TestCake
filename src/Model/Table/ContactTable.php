<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contact Model
 *
 * @method \App\Model\Entity\Contact get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contact newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contact findOrCreate($search, callable $callback = null, $options = [])
 */
class ContactTable extends Table
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

        $this->setTable('contact');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('NOM')
            ->maxLength('NOM', 50)
            ->allowEmpty('NOM');

        $validator
            ->scalar('PRENOM')
            ->maxLength('PRENOM', 50)
            ->allowEmpty('PRENOM');

        $validator
            ->integer('TELEPHONE')
            ->allowEmpty('TELEPHONE');

        $validator
            ->scalar('EMAIL')
            ->maxLength('EMAIL', 50)
            ->allowEmpty('EMAIL');

        $validator
            ->scalar('Rue')
            ->maxLength('Rue', 50)
            ->allowEmpty('Rue');

        $validator
            ->scalar('CODEPOSTAL')
            ->maxLength('CODEPOSTAL', 10)
            ->allowEmpty('CODEPOSTAL');

        $validator
            ->scalar('VILLE')
            ->maxLength('VILLE', 50)
            ->allowEmpty('VILLE');

        $validator
            ->scalar('PAYS')
            ->maxLength('PAYS', 50)
            ->allowEmpty('PAYS');

        return $validator;
    }
}
