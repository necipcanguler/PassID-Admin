<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Sifreler extends Eloquent
{
   protected $connection = 'mongodb';
   protected $collection = 'sifreler';
}
