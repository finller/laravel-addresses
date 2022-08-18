<?php

namespace Finller\Address;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property ?Collection<int,Address> $addresses
 */
trait HasAddresses
{
    /**
     * Auto delete address on parent deletion
     */
    protected static function bootedHasAddresses()
    {
        static::deleting(function (Model $model) {
            $model->addresses()->delete(); // @phpstan-ignore-line
        });
    }

    public function addresses(): MorphOne
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
