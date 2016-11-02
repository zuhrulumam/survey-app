<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="DataDosen",
 *      required={""},
 *      @SWG\Property(
 *          property="ID_STATUS_HENTI",
 *          description="ID_STATUS_HENTI",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="Nama",
 *          description="Nama",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="NIP",
 *          description="NIP",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="ID_UNIT",
 *          description="ID_UNIT",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="ID_SUB_UNIT",
 *          description="ID_SUB_UNIT",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="ID_JENIS_STAF",
 *          description="ID_JENIS_STAF",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="FAKULTAS",
 *          description="FAKULTAS",
 *          type="string"
 *      )
 * )
 */
class DataDosen extends Model {

    use SoftDeletes;

    public $table = 'data_dosen';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'ID_STATUS_HENTI';
    public $fillable = [
        'ID_STATUS_HENTI',
        'Nama',
        'NIP',
        'ID_UNIT',
        'ID_SUB_UNIT',
        'ID_JENIS_STAF',
        'FAKULTAS'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID_STATUS_HENTI' => 'integer',
        'Nama' => 'string',
        'NIP' => 'string',
        'ID_UNIT' => 'integer',
        'ID_SUB_UNIT' => 'integer',
        'ID_JENIS_STAF' => 'string',
        'FAKULTAS' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

}
