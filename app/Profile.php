<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return "/storage/" . ($this->image ?  $this->image : "uploads/xUz5sUxEj00HyJnRK5s05sGM7r7d33uldvxA1YDY.png");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
