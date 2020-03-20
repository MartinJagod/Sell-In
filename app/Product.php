<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $table= "product";
  public $guarded=[];

  protected $fillable = [
      'id_barnd',
      'category',
      'name',
      'sub_category',
      'code',
      'description',
      'pvp',
      'photo',
      'ranking'];
}
