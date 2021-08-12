<?php

namespace app\controllers;


use yii\rest\ActiveController;
use yii\rest\Controller;

class BaseRestController extends Controller {

    protected function response($message = '', $errCode = 0, $data = []) {
        return [
            'errCode' => $errCode,
            'errMsg' => $message,
            'data' => $data,
        ];
    }

    protected function success($data = [], $message = '') {
        return $this->response($message, 0, $data);
    }

    protected function error($message = '', $data = [], $errCode = 1) {
        return $this->response($message, $errCode, $data);

    }
}