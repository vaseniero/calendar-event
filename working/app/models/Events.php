<?php 

class Events extends Eloquent {
	
    protected $table = 'tbl_event';
    public $timestamps = false;

    static function emptyEvent()
    {
        Events::truncate();
    }

    public static function addEvent($request)
    {
        /*
            Empty Event Table
        */
        if(Events::get()->count() > 0) {
            static::emptyEvent();
        }

        /*
            Save Event Table
        */
        $data = new Events;

        $data->title = $request['txtTitle'];
        $data->dte_From = date('Y-m-d', strtotime($request['dteFrom']));
        $data->dte_To = date('Y-m-d', strtotime($request['dteTo']));
        $data->Sun = $request['chkSun'];
        $data->Mon = $request['chkMon'];
        $data->Tue = $request['chkTue'];
        $data->Wed = $request['chkWed'];
        $data->Thu = $request['chkThu'];
        $data->Fri = $request['chkFri'];
        $data->Sat = $request['chkSat'];

        $data = $data->save();

        if($data) {
            return 1;
        }
        else {
            return 0;
        }
    }

    public static function readEvent()
    {
        $title = null;
        $dteFrom = null;
        $dteTo = null;
        $Sun = null;
        $Mon = null;
        $Tue = null;
        $Wed = null;
        $Thu = null;
        $Fri = null;
        $Sat = null;

        // Set timezone
        date_default_timezone_set('UTC');

        $rsEvents = Events::get();

        foreach($rsEvents as $rs) {
            $title = $rs->Title;
            $dteFrom = $rs->dte_From;
            $dteTo = $rs->dte_To;
            $Sun = $rs->Sun;
            $Mon = $rs->Mon;
            $Tue = $rs->Tue;
            $Wed = $rs->Wed;
            $Thu = $rs->Thu;
            $Fri = $rs->Fri;
            $Sat = $rs->Sat;
        }

        $htmlContent = "";

        // Start date
        $date = '2018-07-01';
        // End date
        $end_date = '2018-07-31';

        while (strtotime($date) <= strtotime($end_date)) {

            $nameOfDay = date('D', strtotime($date));
            $dateOfDay = date('d', strtotime($date));

            $htmlContent .= "<tr>";

            if((strtotime($date) >= strtotime($dteFrom)) && (strtotime($date) <= strtotime($dteTo))) 
            {
                switch ($nameOfDay) {
                    case 'Sun':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Sun) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."</td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Mon':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Mon) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."</td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Tue':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Tue) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."</td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Wed':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Wed) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."</td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Thu':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Thu) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."</td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Fri':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Fri) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."</td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Sat':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Sat) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."</td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    
                    default:
                        # code...
                        break;
                }
            }
            else {
                $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
            }
            
            $htmlContent .= "</tr>";

            $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
        }

        $results = array();
        $results['status'] = 1;
        $results['htmlContent'] = $htmlContent;
        $results['Sun'] = $Sun;
        $results['Mon'] = $Mon;
        $results['Tue'] = $Tue;
        $results['Wed'] = $Wed;
        $results['Thu'] = $Thu;
        $results['Fri'] = $Fri;
        $results['Sat'] = $Sat;
        $results['dteFrom'] = $dteFrom;
        $results['dteTo'] = $dteTo;
        $results['title'] = $title;

        die(json_encode($results));     
    }
}
