<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'type', 'hasWheels', 'wheels'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    /**
     * @param $query
     * @param $color
     * @return mixed
     */
    public function scopeWhenColor($query, $color)
    {
        return $query->when($color, function ($q) use ($color) {
            $q->where('color', $color);
        });
    }
}
