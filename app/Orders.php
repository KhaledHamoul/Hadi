<?php

class Orders extends Eloquent {

	protected $table = 'Orders';
	public $timestamps = false;

	public function GetOrder()
	{
		return $this->hasOne('User', 'HajjID');
	}

	public function GetOrder()
	{
		return $this->hasMany('HadiType', 'Price');
	}

}