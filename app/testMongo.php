<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class testMongo extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'data';

}
