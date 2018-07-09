<?php 

class Events extends Eloquent {
	
    protected $table = 'tbl_event';
    public $timestamps = false;

    static function emptyEvent()
    {
        Events::truncate();
    }

    public static function addEvent(Request $request)
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

        $data->title = $request->title;
        $data->dte_From = date('Y-m-d', strtotime($request->dteFrom));
        $data->dte_To = date('Y-m-d', strtotime($request->dteTo));
        $data->Sun = $request->Sun;
        $data->Mon = $request->Mon;
        $data->Tue = $request->Tue;
        $data->Wed = $request->Wed;
        $data->Thu = $request->Thu;
        $data->Fri = $request->Fri;
        $data->Sat = $request->Sat;

        $data = $data->save();

        return response()->json($data);
    }

    public static function readEvent()
    {
        // Set timezone
        date_default_timezone_set('UTC');

        $rs = Events::get();

        $title = $rs->title;
        $dteFrom = $rs->dte_From;
        $dteTo = $rs->dte_To;
        $Sun = $rs->Sun;
        $Mon = $rs->Mon;
        $Tue = $rs->Tue;
        $Wed = $rs->Wed;
        $Thu = $rs->Thu;
        $Fri = $rs->Fri;
        $Sat = $rs->Sat;

        $htmlContent = "";

        // Start date
        $date = '2018-07-01';
        // End date
        $end_date = '2018-07-31';

        while (strtotime($date) <= strtotime($end_date)) {

            $nameOfDay = date('D', strtotime($date));
            $dateOfDay = date('dd', strtotime($date));

            $htmlContent .= "<tr>";

            if((strtotime($date) >= $dteFrom) && (strtotime($date) <= $dteTo)) 
            {
                switch ($nameOfDay) {
                    case 'Sun':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Sun) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."></td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Mon':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Mon) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."></td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Tue':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Tue) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."></td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Wed':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Wed) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."></td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Thu':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Thu) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."></td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Fri':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Fri) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."></td>";
                        }
                        else {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'></td>";   
                        }
                        break;
                    case 'Sat':
                        $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."'>".$dateOfDay." ".$nameOfDay."</td>";
                        if($Sat) {
                            $htmlContent .= "<td id='".$dateOfDay."-".$nameOfDay."-Event'>".$title."></td>";
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
        $results['html'] = $htmlContent;

        die(json_encode($results));     
    }
}
