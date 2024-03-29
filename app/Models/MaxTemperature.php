<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaxTemperature extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'year',
        'january',
        'february',
        'march',
        'april',
        'may',
        'june',
        'july',
        'august',
        'september',
        'october',
        'november',
        'december',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'kind',
    ];

    public function getKindAttribute(): string
    {
        return 'tempmax';
    }
}
