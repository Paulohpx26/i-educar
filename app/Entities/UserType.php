<?php

namespace App\Entities;

use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class UserType.
 *
 * @package namespace App\Entities;
 */
class UserType extends EloquentBaseModel implements Transformable
{
    use TransformableTrait;

    /**
     * @var string
     */
    protected $table = 'pmieducar.tipo_usuario';

    /**
     * @var string
     */
    protected $primaryKey = 'cod_tipo_usuario';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    public function users()
    {
        return $this->hasMany(User::class, 'ref_cod_tipo_usuario', 'cod_tipo_usuario');
    }

}
