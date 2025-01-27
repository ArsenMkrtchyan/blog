<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('indexes.index');
    }
    public function aboutus()
    {
        return view('indexes.aboutus');
    }
    public function contactus()
    {
        return view('indexes.contact-us');
    }

    public function adminHome()
    {
        return view('admin-home');
    }

    public function getAllBlogs()
    {
        $blogs = Blog::all(); // Извлекаем все записи
        return response()->json($blogs); // Возвращаем JSON
    }

    // Получить конкретный блог по ID
    public function getBlogById($id)
    {
        $blog = Blog::find($id); // Ищем запись по ID
        if (!$blog) {
            return response()->json(['message' => 'Блог не найден'], 404);
        }
        return response()->json($blog); // Возвращаем JSON
    }

    // Получить все записи из таблицы products
    public function getAllProducts()
    {
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 1500.99],
            ['id' => 2, 'name' => 'Mouse', 'price' => 25.50]
        ]; // Извлекаем все записи
        return response()->json($products); // Возвращаем JSON
    }

    // Получить конкретный продукт по ID
    public function getProductById($id)
    {
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 1500.99],
            ['id' => 2, 'name' => 'Mouse', 'price' => 25.50]
        ]; //

        $product = null;
        foreach ($products as $item) {
            if ($item['id'] == $id) {
                $product = $item;
                break;
            }
        }
        if (!$product) {
            return response()->json(['message' => 'Продукт не найден'], 404);
        }
        return response()->json($product); // Возвращаем JSON
    }
    public function store(Request $request)
    {
        // Проверяем входные данные
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'required|string',
        ]);

        // Создаём новую запись
        $blog = Blog::create([
            'name' => $validated['name'],
            'detail' => $validated['detail'],
            'image' => $validated['image'],
        ]);

        // Возвращаем созданную запись в формате JSON
        return response()->json($blog, 201);
    }

}
