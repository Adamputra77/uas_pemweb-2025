<?php

namespace App\Http\Controllers;

use App\Models\InformasiKendaraan;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @OA\Tag(
 *     name="InformasiKendaraan",
 *     description="API untuk data motor custom"
 * )
 */
class InformasiKendaraanController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/informasi-kendaraan",
     *     tags={"InformasiKendaraan"},
     *     summary="Ambil semua data motor custom",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Response(response=200, description="Berhasil mengambil data")
     * )
     */
    public function index()
    {
        return response()->json(InformasiKendaraan::all());
    }

    /**
     * @OA\Post(
     *     path="/api/informasi-kendaraan",
     *     tags={"InformasiKendaraan"},
     *     summary="Simpan data motor custom baru",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"nama_kendaraan","merk","tipe","tahun","warna"},
     *             @OA\Property(property="nama_kendaraan", type="string", example="Motor Custom 1"),
     *             @OA\Property(property="merk", type="string", example="Honda"),
     *             @OA\Property(property="tipe", type="string", example="Cafe Racer"),
     *             @OA\Property(property="tahun", type="integer", example=2023),
     *             @OA\Property(property="warna", type="string", example="Merah"),
     *             @OA\Property(property="deskripsi", type="string", example="Motor custom bergaya klasik"),
     *             @OA\Property(property="gambar", type="string", example="motor1.jpg")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Data berhasil disimpan")
     * )
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_kendaraan' => 'required|string',
            'merk' => 'required|string',
            'tipe' => 'required|string',
            'tahun' => 'required|integer',
            'warna' => 'required|string',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|string',
        ]);

        $motor = InformasiKendaraan::create($data);
        return response()->json($motor, 201);
    }

    /**
     * @OA\Get(
     *     path="/api/informasi-kendaraan/{id}",
     *     tags={"InformasiKendaraan"},
     *     summary="Ambil detail motor custom berdasarkan ID",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Berhasil mengambil data"),
     *     @OA\Response(response=404, description="Data tidak ditemukan")
     * )
     */
    public function show($id)
    {
        $motor = InformasiKendaraan::findOrFail($id);
        return response()->json($motor);
    }

    /**
     * @OA\Put(
     *     path="/api/informasi-kendaraan/{id}",
     *     tags={"InformasiKendaraan"},
     *     summary="Update data motor custom",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         @OA\JsonContent(
     *             @OA\Property(property="nama_kendaraan", type="string", example="Motor Custom Update"),
     *             @OA\Property(property="merk", type="string", example="Yamaha"),
     *             @OA\Property(property="tipe", type="string", example="Scrambler"),
     *             @OA\Property(property="tahun", type="integer", example=2024),
     *             @OA\Property(property="warna", type="string", example="Hitam"),
     *             @OA\Property(property="deskripsi", type="string", example="Deskripsi update"),
     *             @OA\Property(property="gambar", type="string", example="motor_update.jpg")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Data berhasil diupdate")
     * )
     */
    public function update(Request $request, $id)
    {
        $motor = InformasiKendaraan::findOrFail($id);

        $data = $request->validate([
            'nama_kendaraan' => 'string',
            'merk' => 'string',
            'tipe' => 'string',
            'tahun' => 'integer',
            'warna' => 'string',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|string',
        ]);

        $motor->update($data);
        return response()->json($motor);
    }

    /**
     * @OA\Delete(
     *     path="/api/informasi-kendaraan/{id}",
     *     tags={"InformasiKendaraan"},
     *     summary="Hapus data motor custom",
     *     security={{"ApiKeyAuth":{}}},
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=204, description="Data berhasil dihapus")
     * )
     */
    public function destroy($id)
    {
        InformasiKendaraan::destroy($id);
        return response()->json(null, 204);
    }
}
