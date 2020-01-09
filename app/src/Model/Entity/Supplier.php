<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supplier Entity
 *
 * @property int $id
 * @property string $companyname
 * @property int|null $companyphone
 * @property string $companymail
 * @property string $companyurl
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Item[] $items
 */
class Supplier extends Entity
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
        'companyname' => true,
        'companyphone' => true,
        'companymail' => true,
        'companyurl' => true,
        'created' => true,
        'modified' => true,
        'items' => true
    ];
}
