<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Studio;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API Booking Studio Musik",
 *      description="Dokumentasi Swagger untuk API Booking Studio Musik"
 * )
 * @OA\PathItem(
 *     path="/api"
 * )
 */
class StudioApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/studios",
     *     tags={"Studios"},
     *     summary="Menampilkan semua data studio",
     *     @OA\Response(
     *         response=200,
     *         description="Berhasil menampilkan data studio"
     *     )
     * )
     */
    public function index()
    {
        return Studio::all();
    }
}
