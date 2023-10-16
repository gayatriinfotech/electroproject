<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_vendor extends Model
{
    use HasFactory;
    protected $fillable=['name','email','contact','address','store_name','store_number','total_chairs','total_tables','city','state','start_date','end_date','status','category'];
}
