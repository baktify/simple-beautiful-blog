<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [''];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function add($data, $user_id)
    {
        $comment = new self;
        $comment->message = $data['message'];
        $comment->article_id = $data['article_id'];
        $comment->user_id = $user_id;
        $comment->save();

        return $comment;
    }
}
