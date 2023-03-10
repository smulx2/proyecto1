<?php
// Los "use" se utilizan para importar el namespace
// de las clases que se necesitan en este archivo api.php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// La ruta se nombra de la siguiente manera: versión + módulo
// Ruta para obtener todos los estudiantes
Route::get('/1.0/students',  [
    StudentController::class, 'index'
]);

// GET:Ruta para obtener un estudiante en particular
Route::get('/1.0/students/{studentId}', [
    StudentController::class, 'show'
]);

// POST:Ruta para crear un estudiante
Route::post('/1.0/students', [
    StudentController::class, 'create'
]);

// PUT:Ruta para actualizar todos los datos de un estudiante
Route::put('/1.0/students/{studentId}', [
    StudentController::class, 'update'
]);

// DELETE:Ruta para eliminar un estudiante
Route::delete('/1.0/students/{studentId}', [
    StudentController::class, 'delete'
]);


//Rutas para obtener todos los cursos
Route::get('/1.0/courses',  [
    CourseController::class, 'index'
]);

// GET:Ruta para obtener un curso en particular
Route::get('/1.0/courses/{courseId}', [
    CourseController::class, 'show'
]);

// POST:Ruta para crear un curso
Route::post('/1.0/courses', [
    CourseController::class, 'create'
]);

// PUT:Ruta para actualizar todos los datos de un curso
Route::put('/1.0/courses/{courseId}', [
    CourseController::class, 'update'
]);

// DELETE:Ruta para eliminar un curso
Route::delete('/1.0/courses/{courseId}', [
    CourseController::class, 'delete'
]);

