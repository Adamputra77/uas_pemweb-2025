# Instalasi dan Konfigurasi API dengan Swagger di Laravel

Dokumentasi ini memandu Anda dalam instalasi dan konfigurasi API di Laravel, termasuk otentikasi menggunakan API Key, enkripsi/dekripsi respons, dan integrasi dokumentasi API dengan Swagger (L5-Swagger).

---

## 1. Instalasi L5-Swagger

Instal package L5-Swagger melalui Composer:

```bash
composer require darkaonline/l5-swagger
```

Publikasikan file konfigurasi dan asset yang diperlukan:

```bash
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
```

File `config/l5-swagger.php` akan dibuat untuk penyesuaian selanjutnya.

---

## 2. Penyesuaian `bootstrap/app.php`

Daftarkan alias untuk `ApiKeyMiddleware` di bagian `withMiddleware()`:

```php
// bootstrap/app.php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        api: __DIR__ . '/../routes/api.php',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Alias untuk ApiKeyMiddleware
        $middleware->alias([
            'apikey' => \App\Http\Middleware\ApiKeyMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
```

---

## 3. Konfigurasi `routes/api.php`

Definisikan endpoint API produk dan terapkan middleware `apikey`:

```php
// routes/api.php

<?php

use App\Http\Controllers\InformasiKendaraanController;
use Illuminate\Support\Facades\Route;

Route::prefix('informasi-kendaraan')->middleware('apikey')->group(function () {
    Route::get('/', [InformasiKendaraanController::class, 'index']);
    Route::post('/', [InformasiKendaraanController::class, 'store']);
    Route::get('{id}', [InformasiKendaraanController::class, 'show']);
    Route::put('{id}', [InformasiKendaraanController::class, 'update']);
    Route::delete('{id}', [InformasiKendaraanController::class, 'destroy']);
});

```

---

## 4. Implementasi `InformasiKendaraan.php` dengan Anotasi OpenAPI

Tambahkan anotasi OpenAPI di bagian atas controller untuk definisi global Swagger.

```php
// app/Http/Controllers/InformasiKendaraan.php

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

```

---

## 5. Implementasi `ApiKeyMiddleware.php`

Tangani otentikasi API Key:

```php
// app/Http/Middleware/ApiKeyMiddleware.php

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $expectedKey = env('API_KEY');
        $providedKey = $request->header('X-API-KEY');

        if ($providedKey !== $expectedKey) {
            return response()->json([
                'message' => 'Unauthorized: Invalid API Key'
            ], 401);
        }

        return $next($request);
    }
}
```

---

## 6. Implementasi `EncryptionHelper.php`

Tangani enkripsi dan dekripsi data:

```php
// app/Helper/EncryptionHelper.php

<?php

namespace App\Helper;

use Illuminate\Support\Facades\Crypt;

class EncryptionHelper
{
    public static function encrypt($data)
    {
        // Gunakan APP_KEY atau KEY_ENCRYPT dari .env
        $key = env('KEY_ENCRYPT', 'defaultkey');
        return Crypt::encryptString($data, false);
    }

    public static function decrypt($encryptedData)
    {
        try {
            return Crypt::decryptString($encryptedData);
        } catch (\Exception $e) {
            return 'Decryption Failed: ' . $e->getMessage();
        }
    }
}
```

---
## 7. Implementasi Struktur OpenAPI di Folder Tersendiri

Buat folder `OpenApi` di dalam `app/`:

```
app/OpenApi/
```

### 1. File `Info.php`

Buat file `Info.php` di `app/OpenApi/` untuk anotasi global dokumentasi:

```php
<?php

namespace App\OpenApi;

/**
 * @OA\Info(
 *     title="My API",
 *     version="1.0.0",
 *     description="This Is API Documentation for My Application",
 *     termsOfService="https://dev.test/terms",
 *     @OA\Contact(
 *         name="API Support",
 *         email="support@example.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 *
 * @OA\Server(
 *     url="https://dev.test",
 *     description="Local API Server"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="ApiKeyAuth",
 *     type="apiKey",
 *     in="header",
 *     name="X-API-KEY"
 * )
 */
class Info {}
```

### 2. File `SecuritySchemes.php`

Buat file `SecuritySchemes.php` di `app/OpenApi/` untuk mendefinisikan skema keamanan tambahan jika diperlukan:

```php
<?php

namespace App\OpenApi;

/**
 * @OA\SecurityScheme(
 *     securityScheme="ApiKeyAuth",
 *     type="apiKey",
 *     in="header",
 *     name="X-API-KEY"
 * )
 */
class SecuritySchemes {}
```

### 3. Folder dan File Schema Produk

Buat folder `Schemas` di dalam `app/OpenApi/`:

```
app/OpenApi/Schemas/
```

Buat file `Product.php` untuk mendefinisikan schema produk:

```php
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

```

**Catatan:** Pastikan nama header pada `@OA\SecurityScheme` konsisten dengan middleware, yaitu `X-API-KEY`.

## 8. Konfigurasi `.env`

Tambahkan variabel berikut:

```env
# Kunci API untuk otentikasi middleware
API_KEY=rahasia12345
```

---

## 9. Generate Dokumentasi Swagger

Jalankan perintah berikut untuk menghasilkan dokumentasi Swagger:

```bash
php artisan l5-swagger:generate
```

Setiap perubahan pada anotasi OpenAPI, jalankan kembali perintah di atas.

---

## 10. Akses Dokumentasi Swagger UI

Akses dokumentasi Swagger UI melalui URL berikut:

```
http://your-app-url/api/documentation
```

atau

```
https://your-app-url/api/documentation
```

Contoh: `https://dev.test/api/documentation`
