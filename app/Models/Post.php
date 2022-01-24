<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['user_id','title','description','urlImage'];
    protected $table = "posts";
    protected $hidden = ['updated_at'];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function routeNotificationForMail($notification)
    {
            return Auth::user()->email;
    }

}
