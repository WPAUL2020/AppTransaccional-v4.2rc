<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class scrapedUserCollectionMongoDB extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'scrapedUser';
}
