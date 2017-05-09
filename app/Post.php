<?php

namespace App;



class Post extends Model
{

    public function comments(){

        return $this->hasMany(Comment::class);

    }

    public function user() //comment->post->user
    {

        return $this->belongsTo(User::class);

    }



    public function addComment($body)

    {

        $this->comments()->create([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        //$this->comments()->create(compact('body'));

      //  Comment::create([

        //    'body' => $body,
          //  'post_id' => $this->id

        //]);

    }


}
