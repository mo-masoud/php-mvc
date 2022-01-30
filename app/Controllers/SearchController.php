<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Story;

class SearchController
{
    public function search()
    {
        $categories = Category::where('id', '!=', 1)->get();

        $keyword = request('keyword') ?? '';
        $category = request('category_id') ?? 0;
        $content = request('content') ?? 0;

        $stories = Story::where('name', 'LIKE', "%$keyword%");
        if ($category) {
            $stories = $stories->where('category_id', '=', $category);
        }

        if ($content && $content != 0) {
            if ($content == 1) {
                $stories = $stories->where('price', '=', 0);
            } else {
                $stories = $stories->where('price', '>', 0);
            }
        }

        $stories = $stories->get();
        return view('search', [
            'categories' => $categories,
            'keyword' => $keyword,
            'stories' => $stories
        ]);
    }
}