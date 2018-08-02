<?php

class Stage extends Eloquent {

	protected $table = 'Stage';
	public $timestamps = false;

	public function GetStage()
	{
		return $this->hasOne('MK', 'MKID');
	}

}