<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Session;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 *
 * @property \App\Model\Entity\Session[] $sessions
 */
class Product extends Entity
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


    public function getSessions(){
        $sessionsTable = TableRegistry::get('Sessions');
        $sessions = $sessionsTable->find('all', ['conditions' => ['product_id' => $this->id]]);
        return $sessions->toArray();
    }
}
