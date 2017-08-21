<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $name
 * @property string $razaoSocial
 * @property int $type
 * @property string $cpf
 * @property string $cnpj
 * @property string $ie
 * @property string $im
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Address[] $addresses
 * @property \App\Model\Entity\Phone[] $phones
 */
class Client extends Entity
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
        '*' => true,
        'id' => false
    ];
}
