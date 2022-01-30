<?php
namespace App\Controllers;

use App\Models\Bill;
use App\Models\Story;
use App\Models\User;
use MasoudMVC\Support\StoryBuilder;
use MasoudMVC\Validation\Validator;

class StoryController
{
    public function store()
    {
        if (!isLogin()) {
            return response()->redirect('/');
        }

        $v = new Validator();
        $v->setRules([
            'name' => 'required|between:4,32',
            'desc' => 'required|between:2,1000',
            'tags' => 'between:0,256',
            'category_id' => 'required',
            'state' => 'required|between:1,2',
            'price' => 'max:20',
        ]);

        $v->make(request()->all());

        if (!$v->passes()) {
            app()->session->setFlash('error', 'Create Story has error');
            app()->session->setFlash('errors', $v->errors());
            app()->session->setFlash('old', request()->all());

            return back();
        }

        $data = request()->all();
        $data['user_id'] = auth()->id;
        $data['price'] = strlen($data['price']) === 0 ? 0.0 : $data['price'];
        $id = Story::create($data);

        StoryBuilder::createStory($id);

        app()->session->setFlash('success', 'Story has been created successfully');
        return back();
    }

    public function show()
    {
        $id = request('story_id');
        $story = Story::find($id);
        if (!$story) {
            return view('errors.404');
        }
        $storyOwner = User::find($story->user_id);

        $episodes = array_diff(scandir("stories/{$story->id}/storytelling/episodes"), ['.', '..']);
        $episodeUrl = "review?episode=stories/{$story->id}/storytelling/episodes/";
        if (isLogin()) {
            $inBill = Bill::where('story_id', '=', $story->id)->where('user_id', '=', auth()->id)->find();
        } else {
            $inBill = null;
        }

        $topStories = Story::get(orderBy: ['views', 'ASC'], limit: 3);

        return view('story', compact('story', 'storyOwner', 'episodeUrl', 'episodes', 'inBill', 'topStories'));
    }

    public function buy()
    {
        if (!isLogin()) {
            return response()->redirect('/');
        }

        $id = request('story_id');
        $story = Story::find($id);
        if (!$story) {
            return view('errors.404');
        }

        Bill::create([
            'story_id' => $story->id,
            'user_id' => auth()->id,
        ]);

        app()->session->setFlash('success', 'Story has been added to your purchases successfully');

        return response()->redirect('profile');
    }
}