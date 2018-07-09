<?php 

class Events extends Eloquent {
	
    protected $table = 'tbl_event';
    public $timestamps = false;

    public static function deleteRecord() 
    {
        Events::truncate();
    }

    public static function insertRecord()
    {
        $input = Input::all();

        $rs = new Events;

        $rs->description = $input['txtEvent'];
        $rs->dteFrom = date('Y-m-d', strtotime($input['dteFrom']));
        $rs->dteTo = date('Y-m-d', strtotime($input['dteTo']));
        $status = $rs->save();

        return $status;
    }
}
