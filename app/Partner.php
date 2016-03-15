<?php

namespace facturacion;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

	protected $table = 'partners';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mail', 'phone',
    ];

}
