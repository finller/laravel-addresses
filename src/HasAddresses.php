<?php

namespace Finller\Address;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property ?Collection<int,Address> $addresses
 */
trait HasAddresses
{
    /**
     * Auto delete address on parent deletion
     */
    protected static function bootedHasAddresses(): void
    {
        static::deleting(function (Model $model) {
            $model->addresses()->delete(); // @phpstan-ignore-line
        });
    }

    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function latestAddress(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable')->latestOfMany();
    }

    public function oldestMessage(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable')->oldestOfMany();
    }
}
