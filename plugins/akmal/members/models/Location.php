<?php namespace Akmal\Members\Models;

use Model;

/**
 * Model
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_members_location';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
