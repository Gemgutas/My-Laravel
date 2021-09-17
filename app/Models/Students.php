<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Students
 * @package App\Models
 * @version September 17, 2021, 1:02 pm UTC
 *
 * @property string $Firstname
 * @property string $Middlename
 * @property string $Lastname
 * @property string $Gender
 * @property string $Birthdate
 * @property string $Address
 * @property string $Citizenship
 * @property string $Religion
 */
class Students extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'students';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Firstname',
        'Middlename',
        'Lastname',
        'Gender',
        'Birthdate',
        'Address',
        'Citizenship',
        'Religion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Firstname' => 'string',
        'Middlename' => 'string',
        'Lastname' => 'string',
        'Gender' => 'string',
        'Birthdate' => 'date',
        'Address' => 'string',
        'Citizenship' => 'string',
        'Religion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Firstname' => 'nullable|string|max:50',
        'Middlename' => 'nullable|string|max:50',
        'Lastname' => 'nullable|string|max:50',
        'Gender' => 'nullable|string|max:15',
        'Birthdate' => 'nullable',
        'Address' => 'nullable|string|max:500',
        'Citizenship' => 'nullable|string|max:50',
        'Religion' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
