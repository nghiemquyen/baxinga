<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;

    protected $table = 'news';
    protected $guarded = [];
}