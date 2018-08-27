<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $NOM
 * @property string $PRENOM
 * @property int $TELEPHONE
 * @property string $EMAIL
 * @property string $Rue
 * @property string $CODEPOSTAL
 * @property string $VILLE
 * @property string $PAYS
 */
class Contact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'NOM' => true,
        'PRENOM' => true,
        'TELEPHONE' => true,
        'EMAIL' => true,
        'Rue' => true,
        'CODEPOSTAL' => true,
        'VILLE' => true,
        'PAYS' => true
    ];
}
