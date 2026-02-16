<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "tracking_number"=>"required|string|max:255|unique:shipments,tracking_number",
            "customer_id"=>"required|integer|exists:customers,id",
            "status"=>"required|Rule::in(['new', 'in_transit', 'delivered', 'delayed'])",
            "amount"=>"nullable|numeric",
            "description"=>"nullable|string",
            "shipped_at"=>"nullable|date",
            "delivered_at"=>"nullable|date",
        ];
    }
}
