<?php namespace Akmal\Members\Models;

use Model;

/**
 * Model
 */
class Member extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name','status'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_members_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

  public $belongsToMany = [
      'location' => [
        'Akmal\Members\Models\Location',
        'table' => 'akmal_members_members_location',
        'order' => 'location_title'
      ]
    ];

    public $attachOne = [
      'img' => 'System\Models\File'
    ];
}
