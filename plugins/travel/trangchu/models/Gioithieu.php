<?php namespace Travel\Trangchu\Models;

use Model;

/**
 * Model
 */
class Gioithieu extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'travel_trangchu_about';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
