<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blog;

    public static function newBlog($request){
        self::saveBasicInfo(new Blog(), $request);
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        self::saveBasicInfo(self::$blog, $request);
    }

    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        self::$blog->delete();
    }

    private static function saveBasicInfo($blog, $request)
    {
        $blog->category_id = $request->category_id;
        $blog->name        = $request->name;
        $blog->description = $request->description;

        $blog->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
