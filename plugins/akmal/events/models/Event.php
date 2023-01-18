<?php namespace Akmal\Events\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    

  public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title','location','content'];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'akmal_events_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $attachOne = [
      'img' => 'System\Models\File'
    ];
}
