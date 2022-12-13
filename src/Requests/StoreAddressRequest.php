<?php

namespace Finller\Address\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'label' => ['string', 'nullable'],
            'first_name' => ['string', 'nullable'],
            'last_name' => ['string', 'nullable'],
            'organization' => ['string', 'nullable'],
            'country' => ['string', 'nullable', 'min:2', 'max:2'],
            'street' => ['string', 'nullable'],
            'state' => ['string', 'nullable'],
            'city' => ['string', 'nullable'],
            'postal_code' => ['string', 'nullable'],
            'latitude' => ['numeric', 'nullable'],
            'longitude' => ['numeric', 'nullable'],
            'boundaries' => ['array', 'nullable'],
            'is_primary' => ['boolean', 'sometimes'],
            'is_billing' => ['boolean', 'sometimes'],
            'is_shipping' => ['boolean', 'sometimes'],
            'type' => ['boolean', 'nullable'],
        ];
    }
}
