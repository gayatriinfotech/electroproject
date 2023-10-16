<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_subcategory extends Model
{
    use HasFactory;
    protected $fillable=['subcate_name','subcate_image','subcate_status'];
}
