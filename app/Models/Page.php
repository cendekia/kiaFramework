<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  protected $fillable = [
		'name',
		'slug',
		'parent_id',
		'description',
		'order'
	];


	public function scopeOfSlug($query, $slug, $subPage = null)
	{
		return $query->whereSlug( ( $subPage ) ? $subPage : $slug )->first();
	}
}
