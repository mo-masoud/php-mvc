<?php
namespace App\Controllers;

use App\Models\Bill;
use App\Models\Story;

class UserController
{
    public function profile()
    {
        if (!isLogin()) {
            return response()->redirect('/');
        }

        $stories = Story::where('user_id', '=', auth()->id)->get();
        $storiesViews = 0;
        array_map(function ($story) use (&$storiesViews) {
            $storiesViews += $story->views;
        }, $stories);
        $storiesCount = count($stories);

        $bills = Bill::where('user_id', '=', auth()->id)->get();
        $purchases = [];
        array_map(function ($bill) use (&$purchases) {
            $purchases[] = Story::where('id', '=', $bill->story_id)->find();
        }, $bills);

        return view('profile', compact('storiesCount', 'storiesViews', 'stories', 'purchases'));
    }
}