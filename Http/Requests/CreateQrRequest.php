<?php

namespace Modules\Iqreable\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateQrRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
          'content' => 'required|min:2',
          'zone' => 'required|min:2',
        ];
    }

    public function translationRules()
    {
        return [
          'title' => 'required|min:2'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
          'content.required' => trans('iqreable::qrs.validation.required'),
          'content.min:2' => trans('iqreable::qrs.validation.min2characters'),
          'zone.required' => trans('iqreable::qrs.validation.required'),
          'zone.min:2' => trans('iqreable::qrs.validation.min2characters'),
        ];
    }

    public function translationMessages()
    {
        return [
          'title.required' => trans('iqreable::qrs.validation.required'),
          'title.min:2' => trans('iqreable::qrs.validation.min2characters'),
        ];
    }

    public function getValidator(){
        return $this->getValidatorInstance();
    }

}
