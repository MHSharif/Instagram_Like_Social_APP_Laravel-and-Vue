<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $imagepath=($this->image) ?  $this->image:'profile/no image available.png';
        return '/storage/' .$imagepath ;
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
