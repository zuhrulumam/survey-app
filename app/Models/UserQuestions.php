<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="UserQuestions",
 *      required={""},
 *      @SWG\Property(
 *          property="rel_user_id",
 *          description="rel_user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="rel_question_id",
 *          description="rel_question_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="rel_answer",
 *          description="rel_answer",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class UserQuestions extends Model {

    use SoftDeletes;

    public $table = 'user_questions';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = null;
    protected $dates = ['deleted_at'];
    public $fillable = [
        'rel_user_id',
        'rel_question_id',
        'rel_answer',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rel_user_id' => 'integer',
        'rel_question_id' => 'integer',
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
