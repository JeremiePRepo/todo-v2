<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // @var array
    protected $fillable = [
        'task',
    ];

    /**
     * Définit la relation avec les pondérateurs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ponderators()
    {
        return $this->belongsToMany(Ponderator::class);
    }
}
