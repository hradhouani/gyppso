<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class Product extends Model
{

    use Resizable;
    public function category()
    {
      return  $this->belongsTo("App\ProductCategory",'category_id');

    }
}
