<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Goods extends Model {
	//

	protected $table = 'goods';

	//
	protected $dateFormat = 'U';

    use SoftDeletes;

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = ['goods_name','marking_price','seller_price','img_big_url',
        'img_origon_url','img_small_url','amount','color','is_recommand',
        'is_hot','is_top','intro','description'];
}
