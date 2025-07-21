<?php

namespace App\OpenApi\Schemas;

/**
 * @OA\Schema(
 *     schema="InformasiKendaraan",
 *     title="InformasiKendaraan",
 *     type="object",
 *     required={"nama_kendaraan","merk","tipe","tahun","warna"},
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="nama_kendaraan", type="string", example="Motor Custom 1"),
 *     @OA\Property(property="merk", type="string", example="Honda"),
 *     @OA\Property(property="tipe", type="string", example="Cafe Racer"),
 *     @OA\Property(property="tahun", type="integer", example=2023),
 *     @OA\Property(property="warna", type="string", example="Merah"),
 *     @OA\Property(property="deskripsi", type="string", example="Motor custom bergaya klasik"),
 *     @OA\Property(property="gambar", type="string", example="motor1.jpg"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */
class InformasiKendaraan {}
