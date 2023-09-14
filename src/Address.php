<?php

namespace Finller\Address;

use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property ?int $addressable_id
 * @property ?string $addressable_type
 * @property ?Model $addressable
 * @property ?string $label
 * @property ?string $first_name
 * @property ?string $last_name
 * @property ?string $organization
 * @property ?string $country
 * @property ?string $street
 * @property ?string $state
 * @property ?string $city
 * @property ?string $postal_code
 * @property ?float $latitude
 * @property ?float $longitude
 * @property ?array<int, mixed> $boundaries
 * @property ?string $type
 * @property bool $is_primary
 * @property bool $is_billing
 * @property bool $is_shipping
 * @property ?string $phone
 * @property ?ArrayObject $metadata
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
        'phone',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'is_primary' => 'boolean',
        'is_billing' => 'boolean',
        'is_shipping' => 'boolean',
        'deleted_at' => 'datetime',
        'boundaries' => 'array',
        'metadata' => AsArrayObject::class,
    ];

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }

    public function __toString()
    {
        return $this->street . ' ' . $this->postal_code . ' ' . $this->city;
    }
}
