<?php

namespace App\Repositories;

use App\Models\YoutubeVideo;
use App\Repositories\Abstract\AbstractRepository;

class YoutubeVideoRepository extends AbstractRepository
{
    protected $modelClass = YoutubeVideo::class;
}
