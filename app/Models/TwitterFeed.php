<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Thujohn\Twitter\Facades\Twitter;

class TwitterFeed extends Model
{
    protected $table = 'twitter_feed';

    protected $fillable = ['tweet_id', 'tweet', 'tweet_created_at'];


    public static function getLatestTweet()
    {
        $tweet = TwitterFeed::first();

        if ( ! $tweet || strtotime($tweet->created_at) < strtotime('-1 hour'))
        {
            $tweet = self::saveLatestTweet();
        }

        return $tweet;
    }

    public static function saveLatestTweet()
    {
        $latestTweet = Twitter::getUserTimeline(['screen_name' => 'danbondd', 'count' => 1, 'format' => 'json', 'include_rts' => 0, 'exclude_replies' => 1]);
        $latestTweet = json_decode($latestTweet);

        $tweetDetails = [
            'tweet_id' => $latestTweet[0]->id,
            'tweet' => $latestTweet[0]->text,
            'tweet_created_at' => date('Y-m-d H:i:s', strtotime($latestTweet[0]->created_at))
        ];

        TwitterFeed::truncate();

        $tweet = TwitterFeed::create($tweetDetails);

        return $tweet;
    }
}
