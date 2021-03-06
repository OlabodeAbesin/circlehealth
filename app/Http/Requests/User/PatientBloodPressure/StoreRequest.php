<?php
declare(strict_types=1);

namespace App\Http\Requests\User\PatientBloodPressure;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'systolic' => ['required','integer','min: 0', 'max:300'],
            'diastolic' => ['required','integer','min: 0', 'max:300'],
            'time_of_record' => ['date_format:Y-m-d H:i'],
            'user_id'=> 'required',
        ];
    }
}
