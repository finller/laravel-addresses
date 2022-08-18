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
 * @property ?array<int, mixed> $boundaries
 * @property ?string $type
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
        'country',
        'street',
        'state',
        'city',
        'postal_code',
        'latitude',
        'longitude',
        'boundaries',
        'is_primary',
        'is_billing',
        'is_shipping',
        'type',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'is_primary' => 'boolean',
        'is_billing' => 'boolean',
        'is_shipping' => 'boolean',
        'deleted_at' => 'datetime',
        'boundaries' => 'array',
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
