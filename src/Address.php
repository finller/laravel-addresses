<?php

namespace Finller\Address;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\ArrayObject;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
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
 * @property ?string $email
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property ?ArrayObject $metadata
 */
class Address extends Model
{
    use HasFactory;

    protected $guarded = [];

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
        return collect([$this->street, $this->postal_code, $this->city, $this->state, $this->country])->filter()->join(' ');
    }
}
