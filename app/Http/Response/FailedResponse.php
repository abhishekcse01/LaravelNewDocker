<?php
/**
 * @author Abhinandan
 * Date: 07/11/19
 */

namespace App\Modules\HpwhEstimate\Responses;

class FailedResponse
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => false,
            'data' => [],
            'message' =>  $this->message
        ], 500);
    }
}
