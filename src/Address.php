<?php

namespace Finller\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property ?Model $addressable
 * @property ?string $country_code
 * @property ?string $street
 * @property ?string $state
 * @property ?string $city
 * @property ?string $postal_code
 */
class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'addressable_id',
        'addressable_type',
        'label',
        'first_name',
        'last_name',
        'organization',
        'country_code',
        'street',
        'state',
        'city',
        'postal_code',
        'latitude',
        'longitude',
        'is_primary',
        'is_billing',
        'is_shipping',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'is_primary' => 'boolean',
        'is_billing' => 'boolean',
        'is_shipping' => 'boolean',
        'deleted_at' => 'datetime',
    ];

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }

    public function __toString()
    {
        return $this->street.' '.$this->postal_code.' '.$this->city;
    }
}
