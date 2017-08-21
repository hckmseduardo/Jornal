<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Addtype;

/**
 * Session Entity
 *
 * @property int $id
 * @property string $name
 * @property int $product_Id
 */
class Session extends Entity
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

    public function getAddtypes(){
        $addtypesTable = TableRegistry::get('Addtypes');
        $addtypes = $addtypesTable->find('all', ['conditions' => ['session_id' => $this->id]]);
        return $addtypes->toArray();
    }

}
