<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class dataCollectionMongoDB extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'data';
}
