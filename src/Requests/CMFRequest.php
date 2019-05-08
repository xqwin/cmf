<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */
namespace XQWIN\CMF\Requests;

trait CMFRequest{
    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function failedValidation( Validator $validator ) {
        if($this->ajax()){
            return response()->json(
                [
                    'status'=>'fail',
                    'msg'=>'fail',
                    'data'=>$validator->getMessageBag()->toArray()
                ]
            );
        }
        throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
