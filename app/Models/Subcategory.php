<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    public static $subcategory;

//    private static function saveBasicInfo($subcategory, $request)
//    {
//        $subcategory->category_id = $request->category_id;
//        $subcategory->subcategory_id = $request->subcategory_id;
//        $subcategory->name        = $request->name;
//        $subcategory->save();
//    }
    private static function saveBasicInfo($subcategory, $request)
    {
        $subcategory->name = $request->name;

        // Check if subcategory is selected
        if ($request->subcategory_id) {
            $subcategory->subcategory_id = $request->subcategory_id;
        } else {
            $subcategory->subcategory_id = null; // or handle it according to your logic
        }

        // Set category_id
        $subcategory->category_id = $request->category_id;

        $subcategory->save();
    }


    public static function newSubcategory($request)
    {
        self::saveBasicInfo(new Subcategory(), $request);
    }

    public static function updateSubcategory($request, $id)
    {
        self::$subcategory = Subcategory::find($id);
        self::saveBasicInfo(self::$subcategory, $request);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
