<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * Атрибуты, для которых НЕ разрешено массовое присвоение значений.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Следует ли обрабатывать временные метки модели.
     *
     * @var bool
     */
    public $timestamps = false;
}
