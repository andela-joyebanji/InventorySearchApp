<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price'
    ];

    /**
     * Get the category the inventory belongs to
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Scope a query to search by emoji name.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $type, $typeValue, $OrderBy, $filterBy)
    {
        return $query->whereRaw('LOWER('.$type.') like ?', ['%'.strtolower($typeValue).'%'])
                     ->orderBy($OrderBy, 'desc');
    }
}
