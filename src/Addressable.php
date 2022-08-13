<?php

namespace Finller\Address;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property ?Address $addresses
 */
trait Addressable
{
    /**
     * Auto delete address on parent deletion
     */
    protected static function bootedAddressable()
    {
        static::deleting(function (Model $model) {
            $model->address()->delete(); // @phpstan-ignore-line
        });
    }

    public function address(): MorphOne
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
