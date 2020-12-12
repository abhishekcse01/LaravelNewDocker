<?php
/**
 * @author Abhishek
 * Date: 11/12/20
 */

namespace App\Http\Response;

class SuccessResponse
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $this->data,
            'message' => 'Request was successful'
        ], 200);
    }
}
