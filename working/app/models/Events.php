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
        $Sun = false;
        $Mon = false;
        $Tue = false;
        $Wed = false;
        $Thu = false;
        $Fri = false;
        $Sat = false;

        foreach($request['day']) as $value) {
            switch ($value) {
                case 'Sun':
                    $Sun = true;
                    break;
                case 'Mon':
                    $Mon = true;
                    break;
                case 'Tue':
                    $Tue = true;
                    break;
                case 'Wed':
                    $Wed = true;
                    break;
                case 'Thu':
                    $Thu = true;
                    break;
                case 'Fri':
                    $Fri = true;
                    break;
                case 'Sat':
                    $Sat = true;
                    break;
                
                default:
                    # code...
                    break;
            }
        }

        $data = new Events;

        $data->title = $request['txtTitle'];
        $data->dte_From = date('Y-m-d', strtotime($request['dteFrom']));
        $data->dte_To = date('Y-m-d', strtotime($request['dteTo']));
        $data->Sun = $Sun;
        $data->Mon = $Mon;
        $data->Tue = $Tue;
        $data->Wed = $Wed;
        $data->Thu = $Thu;
        $data->Fri = $Fri;
        $data->Sat = $Sat;

        if($data->save()) {
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
        // Set timezone
        date_default_timezone_set('UTC');

        // Start date
        $dteStart = '2018-07-01';
        // End date
        $dteEnd = '2018-07-31';

        $htmlContent = "";

        while (strtotime($dteStart) <= strtotime($dteEnd)) {

            $nameOfDay = date('D', strtotime($date));
            $dateOfDay = date('d', strtotime($date));

            $htmlContent .= "<tr>";

            if((strtotime($dteStart) >= strtotime($dteFrom)) && (strtotime($dteStart) <= strtotime($dteTo))) 
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

            $dteStart = date ("Y-m-d", strtotime("+1 day", strtotime($dteStart)));
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
