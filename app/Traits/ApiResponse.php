<?php

namespace App\Traits;

trait ApiResponse
{
    private function successResponse($data, $code)
    {
        return response()->json($data, $code);
    }

    protected function errorResponse($error, $code)
    {
        return response()->json(['error' => $error, 'code' => $code], $code);
    }

    protected function sendResponse($message, $code = 200)
    {
        return $this->successResponse(['data' => $message], $code);
    }


}
