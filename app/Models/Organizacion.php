<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organizacion extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'country',
        'timezone',
        'tax_id_type',
        'tax_id_number',
        'tax_rate_type'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function sucursals(): HasMany
    {
        return $this->hasMany(Sucursal::class);
    }

    public function whatsAppInstances(): HasMany
    {
        return $this->hasMany(WhatsAppInstance::class);
    }

    public function taxRates()
    {
        return $this->hasMany(TaxRate::class);
    }

    public function currencies()
    {
        return $this->hasMany(Currency::class);
    }

    public function tasks()
    {
        return $this->hasMany(\App\Models\Task::class, 'organizacion_id');
    }

}
