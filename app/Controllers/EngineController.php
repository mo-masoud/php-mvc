<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Story;
use MasoudMVC\Support\StoryBuilder;

class EngineController
{
    public function engine()
    {
        return view('storytelling', includeMain: false);
    }

    public function review()
    {
        $id = request('story_id');
        $story = Story::find($id);
        if (!$story) {
            return view('errors.404');
        }

        $storyOwner = User::find($story->user_id);

        return view('review', params: compact('story', 'storyOwner'), includeMain: false);
    }

    public function getEpisodes()
    {
        if (request('function2call')) {
            $function2call = request('function2call');
            //$arg = request('arguments');
            switch ($function2call) {
                case 'viewcharacters':StoryBuilder::getFilesPaths('./stories/' . request('path') . '/storytelling/characters/'); break;
                case 'viewsettings':StoryBuilder::getFilesPaths('./stories/' . request('path') . '/storytelling/settings/'); break;
                case 'viewitems':StoryBuilder::getFilesPaths('./stories/' . request('path') . '/storytelling/items/'); break;
                case 'viewbgm':StoryBuilder::getFilesPaths('./stories/' . request('path') . '/storytelling/bgm/'); break;
                case 'viewsoundeffects':StoryBuilder::getFilesPaths('./stories/' . request('path') . '/storytelling/sound effects/'); break;
                case 'viewvoice':StoryBuilder::getFilesPaths('./stories/' . request('path') . '/storytelling/voice/'); break;

                case 'createEP':StoryBuilder::createEP(request('path'), request('epName')); break;
                case 'viewEPs':StoryBuilder::getFilesPaths('./stories/' . request('path') . '/storytelling/episodes/'); break;

                case 'overwriteEP':StoryBuilder::overwriteEP(request('path'), request('content')); break;
            }
        }
    }

    public function storyOperate()
    {
        // ajax call the php function
        if (isset($_POST['function2call']) && !empty($_POST['function2call'])) {
            $function2call = $_POST['function2call'];
            //$arg = $_POST['arguments'];
            switch ($function2call) {
                case 'addNewStory':StoryBuilder::saveXMLFile($_POST['storyName'], $_POST['content']); break;
                case 'viewStories':StoryBuilder::viewStories(); break;
                case 'viewFiles':StoryBuilder::viewFiles($_POST['nextPath']); break;
                case 'deleteFile':StoryBuilder::deleteFile($_POST['filePath']); break;
            }
        }
    }
}