<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'customer_id' => 'nullable|exists:customers,id',
            'store_id' => 'nullable|exists:locations,id',
            'staffId' => 'nullable|exists:users,id',
            'note' => 'nullable|string',
            'discount' => 'nullable',
            'paidAmount' => 'nullable',
            'paymentType' => 'nullable|string',
            'deliveryId' => 'nullable|exists:delivery_options,id',
            'dateTimeOut' => 'nullable',
            'discount_percentage' => 'nullable',
            'extra_discount_percentage' => 'nullable',
            'extra_discount_value' => 'nullable',
            'summary' => 'nullable',
            'extra_discount_id' => 'nullable|exists:discount_types,id',
        ];
    }
}
