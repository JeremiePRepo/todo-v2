<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponderator extends Model
{
    // @var array
    protected $fillable = [];

    /**
     * Défini la relation avec les tâches.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        // return $this->hasMany(Tasks::class);
        return $this->belongsToMany(Task::class);
    }
}
