<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class dataTOPCollectionMongoDB extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'dataTopHashtag';
}
