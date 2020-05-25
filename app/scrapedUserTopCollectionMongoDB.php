<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class scrapedUserTopCollectionMongoDB extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'scrapedUserTop';
}
