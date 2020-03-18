<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name', 'Content', 'category_id', 'photo'];
    public function myPhoto()
    {
        if (!$this->photo) {
            return asset('images/default.jpg');
        }

        return asset('images/' . $this->photo);
    }
}
