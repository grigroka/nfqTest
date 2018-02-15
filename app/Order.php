<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Order extends Model
{
    Use Sortable;

    public $sortable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'details',
        'created_at',
        'updated_at'
    ];
}
