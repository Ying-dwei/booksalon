<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

use App\User as User; 
use App\Book as Book; 

class Article extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'book_id', 'user_id', 'domiArc_id'
    ];


    public function user () {
        return $this->belongsTo(User::class);
    }
    public function book () {
        return $this->belongsTo(Book::class);
    }


}