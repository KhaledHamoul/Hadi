<?php

class Hadi extends Eloquent {

	protected $table = 'Hadi';
	public $timestamps = false;

	public function GetHadi()
	{
		return $this->hasOne('Orders', 'OrderID', 'SeqNo');
	}

	public function GetHadi()
	{
		return $this->hasOne('Stage', 'StageID');
	}

	public function GetHadi()
	{
		return $this->hasOne('MK', 'MKID');
	}

	public function GetHadi()
	{
		return $this->hasOne('HadiType', 'TypeID');
	}

}