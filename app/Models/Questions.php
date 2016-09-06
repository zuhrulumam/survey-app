<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Questions",
 *      required={""},
 *      @SWG\Property(
 *          property="question_id",
 *          description="question_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="question_slug",
 *          description="question_slug",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="question_category_id",
 *          description="question_category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="question_text",
 *          description="question_text",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="first_category_comparation",
 *          description="first_category_comparation",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="second_category_comparation",
 *          description="second_category_comparation",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Questions extends Model
{
    use SoftDeletes;

    public $table = 'questions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $primaryKey = 'question_id';

    public $fillable = [
        'question_slug',
        'question_category_id',
        'question_text',
        'first_category_comparation',
        'second_category_comparation',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'question_id' => 'integer',
        'question_slug' => 'string',
        'question_category_id' => 'integer',
        'question_text' => 'string',
        'first_category_comparation' => 'integer',
        'second_category_comparation' => 'integer',
        'deleted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
