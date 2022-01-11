<?php

namespace App;
use App\User;


class  Produk Extends Model{
	protected $table = 'produk';
  
	protected $casts = [
		'created_at' => 'datetime',
		'berat'=> 'decimal:2'
	];

	function seller(){
		return $this->belongsTo(User:: class, 'id_user');
	}
	function getHargaAttribute(){
	return "Rp.".number_format ($this->attributes['Harga']);
	}
		
}