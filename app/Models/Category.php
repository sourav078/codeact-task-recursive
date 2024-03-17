<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public static function newCategory($request)
//    {
//        self::$category = new Category();
//        self::$category->name = $request->name;
//        self::$category->save();
//    }

//    public static function updateCategory($request, $id)
//    {
//        self::$category = Category::find($id);
//        self::$category->name           = $request->name;
//        self::$category->save();
//    }
//
//    public static function deleteCategory($id)
//    {
//        self::$category = Category::find($id);
//        self::$category->delete();
//    }
    public function parent(){
        return $this->belongsTo(Category::class,'category_id');
    }


    public function children()
    {
        return $this->hasMany(Category::class, 'category_id');
    }



}
