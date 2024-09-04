<?php

namespace App\Helpers;

use App\Enums\StatusCode\StatusCode;

class ResponseHelper
{
    public static function success($data = [], $messageKey = null, StatusCode $code = StatusCode::SUCCESS)
    {
        $message = $messageKey ? config('messages.' . $messageKey) : 'Success';
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code->value);
    }

    public static function error($messageKey = 'error.default', StatusCode $code = StatusCode::INTERNAL_SERVER_ERROR)
    {
        $message = config('messages.' . $messageKey);
        return response()->json([
            'status' => 'error',
            'message' => $message
        ], $code->value);
    }
}
