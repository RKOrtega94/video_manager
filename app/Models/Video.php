<?php

namespace App\Models;

use Embed\Embed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;


    protected $fillable = ["title", "description", "url", "state"];

    public function getThumbnail(): string
    {
        $url = $this->url;
        $url = str_replace("https://www.youtube.com/watch?v=", "", $url);
        $url = "http://img.youtube.com/vi/$url/0.jpg";
        return $url;
    }

    public function getUrlId()
    {
        $url = $this->url;
        $url = str_replace("https://www.youtube.com/watch?v=", "", $url);
        return $url;
    }
}
