<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Routing\Controller as BaseController;

class StoryController extends BaseController
{
    public function read()
    {
        // Check read stories
        $readIDs = $this->getReadStoryIDs();
        $stories = Story::query()->whereNotIn('id', $readIDs)->get();
        return view('story', [
            'stories' => $stories,
            'read_ids' => $readIDs
        ]);
    }

    public function vote($id, $vote)
    {
        $story = Story::query()->where('id', $id)->first();
        if ($story) {
            // Check read stories
            $readIDs = $this->getReadStoryIDs();
            array_push($readIDs, $story->id);
            $cookie = cookie('read_story_ids', json_encode($readIDs));
            if ($vote == 0) {
                $story->total_dislike = $story->total_dislike + 1;
            } else {
                $story->total_like = $story->total_like + 1;
            }
            $story->save();
        }
        return back()->cookie($cookie);
    }

    public function getReadStoryIDs()
    {
        $ids = request()->cookie('read_story_ids');
        if (empty($ids)) {
            return [];
        }
        return json_decode($ids, true);
    }

    public function btnRead()
    {
        // Check read stories
        $readIDs = $this->getReadStoryIDs();
        $stories = Story::query()->whereNotIn('id', $readIDs)->get();
        return view('btn_story', [
            'stories' => $stories,
            'read_ids' => $readIDs
        ]);
    }
}
