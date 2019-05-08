<?php

namespace XQWIN\CMF\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \Illuminate\Contracts\Validation\Validator;
use \Illuminate\Validation\ValidationException;
use \XQWIN\CMF\Requests\CMFRequest;

class PermissionPost extends FormRequest
{
    use CMFRequest;
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
            'name' => 'required',
            'controller' => 'required',
            'methods' => 'required',
            'middleware' => 'required',
            'namespaceall' => 'required',
            'sort' => 'numeric',
            'type' => 'numeric',
            'uri' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "名称必须填写.",
            //'controller.required'=>"控制器必须填写",
            'methods.required' => "方法必须填写.",
            'middleware.required' => "必须要有中间件",
            'namespaceall.required' => "必须要有完整的命名空间",
            'sort.numeric' => '排序值必须填写数字.',
            'type.numeric'=>'链接类型必须选择.',
            'uri.required'=>'URL必须填写.'
        ];

    }

}
