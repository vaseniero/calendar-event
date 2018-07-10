<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="_token" content="{{ csrf_token() }}"/>
	<title>Laravel PHP Framework</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link href="{{ asset('datetimepicker/bootstrap_v3/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
  	<link href="{{ asset('datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel='stylesheet' media="screen"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
  		.input-date {
  			width:200px;
  		}
  	</style>
</head>
<body>
<div class="text-center">
  <h1>Calendar Event</h1>
  <hr>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-md-5 col-md-offset-1">
    	{{Form::open(array("","id"=>"frm"))}}
  		<div class="form-group">
    		<label for="txtEvent">Event</label>
    		<input type"text" class="form-control" name="txtTitle" id="txtTitle" placeholder="Enter Event Title" required>
  		</div>
   		<div class="form-group">
			<label for="dteFrom" class="control-label">From</label>
            <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dteFrom" data-link-format="yyyy-mm-dd">
                <input class="form-control" size="20" type="text" value="" id="dtpFrom" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
			<input type="hidden" name="dteFrom" id="dteFrom" value="" /><br/>
			<label for="dteTo" class="control-label">To</label>
            <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dteTo" data-link-format="yyyy-mm-dd">
                <input class="form-control" size="20" type="text" value="" id="dtpTo" readonly>
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
			<input type="hidden" name="dteTo" id="dteTo" value="" /><br/>
  		</div>
   		<div class="form-group">
			<input type="checkbox" id="chkMon">
			<label for="chkMon">Mon</label>
			<input type="checkbox" id="chkTue">
			<label for="chkTue">Tue</label>
			<input type="checkbox" id="chkWed">
			<label for="chkWed">Wed</label>
			<input type="checkbox" id="chkThu">
			<label for="chkThu">Thu</label>
			<input type="checkbox" id="chkFri">
			<label for="chkFri">Fri</label>
			<input type="checkbox" id="chkSat">
			<label for="chkSat">Sat</label>
			<input type="checkbox" id="chkSun">
			<label for="chkSun">Sun</label>
  		</div>
  		<div class="form-group">
  			<button type="submit" class="btn btn-primary" id="add"><span class="glyphicon glyphicon-plus"></span> ADD</button>
  		</div>
  		{{ Form::close() }}
    </div>
    <div class="col-md-6">
      	<h3>Jul 2018</h3>
		<table name="tblCalEvent" id="tblCalEvent" class="table">
			<thead>
			</thead>

			<tbody>                    
				<tr>
				  <td id="1-Sun">1 Sun</td>
				  <td id="1-Sun-Event"></td>
				</tr>
				<tr>
				  <td id="2-Mon">2 Mon</td>
				  <td id="2-Mon-Event"></td>
				</tr>
				<tr>
				  <td id="3-Tue">3 Tue</td>
				  <td id="3-Tue-Event"></td>
				</tr>
				<tr>
				  <td id="4-Wed">4 Wed</td>
				  <td id="4-Wed-Event"></td>
				</tr>
				<tr>
				  <td id="5-Thu">5 Thu</td>
				  <td id="5-Thu-Event"></td>
				</tr>
				<tr>
				  <td id="6-Fri">6 Fri</td>
				  <td id="6-Fri-Event"></td>
				</tr>
				<tr>
				  <td id="7-Sat">7 Sat</td>
				  <td id="7-Sat-Event"></td>
				</tr>

				<tr>
				  <td id="8-Sun">8 Sun</td>
				  <td id="8-Sun-Event"></td>
				</tr>
				<tr>
				  <td id="9-Mon">9 Mon</td>
				  <td id="9-Mon-Event"></td>
				</tr>
				<tr>
				  <td id="10-Tue">10 Tue</td>
				  <td id="10-Tue-Event"></td>
				</tr>
				<tr>
				  <td id="11-Wed">11 Wed</td>
				  <td id="11-Wed-Event"></td>
				</tr>
				<tr>
				  <td id="12-Thu">12 Thu</td>
				  <td id="12-Thu-Event"></td>
				</tr>
				<tr>
				  <td id="13-Fri">13 Fri</td>
				  <td id="13-Fri-Event"></td>
				</tr>
				<tr>
				  <td id="14-Sat">14 Sat</td>
				  <td id="14-Sat-Event"></td>
				</tr>

				<tr>
				  <td id="15-Sun">15 Sun</td>
				  <td id="15-Sun-Event"></td>
				</tr>
				<tr>
				  <td id="16-Mon">16 Mon</td>
				  <td id="16-Mon-Event"></td>
				</tr>
				<tr>
				  <td id="17-Tue">17 Tue</td>
				  <td id="17-Tue-Event"></td>
				</tr>
				<tr>
				  <td id="18-Wed">18 Wed</td>
				  <td id="18-Wed-Event"></td>
				</tr>
				<tr>
				  <td id="19-Thu">19 Thu</td>
				  <td id="19-Thu-Event"></td>
				</tr>
				<tr>
				  <td id="20-Fri">20 Fri</td>
				  <td id="20-Fri-Event"></td>
				</tr>
				<tr>
				  <td id="21-Sat">21 Sat</td>
				  <td id="21-Sat"-Event"></td>
				</tr>

				<tr>
				  <td id="22-Sun">22 Sun</td>
				  <td id="22-Sun-Event"></td>
				</tr>
				<tr>
				  <td id="23-Mon">23 Mon</td>
				  <td id="23-Mon-Event"></td>
				</tr>
				<tr>
				  <td id="24-Tue">24 Tue</td>
				  <td id="24-Tue-Event"></td>
				</tr>
				<tr>
				  <td id="25-Wed">25 Wed</td>
				  <td id="25-Wed-Event"></td>
				</tr>
				<tr>
				  <td id="26-Thu">26 Thu</td>
				  <td id="26-Thu-Event"></td>
				</tr>
				<tr>
				  <td id="27-Fri">27 Fri</td>
				  <td id="27-Fri-Event"></td>
				</tr>
				<tr>
				  <td id="28-Sat">28 Sat</td>
				  <td id="28-Sat"-Event"></td>
				</tr>

				<tr>
				  <td id="29-Sun">29 Sun</td>
				  <td id="29-Sun-Event"></td>
				</tr>
				<tr>
				  <td id="30-Mon">30 Mon</td>
				  <td id="30-Mon-Event"></td>
				</tr>
				<tr>
				  <td id="31-Tue">31 Tue</td>
				  <td id="31-Tue-Event"></td>
				</tr>
			</tbody>

			<tfoot>
			</tfoot>
		</table>
    </div>
  </div>
</div>

<script type="text/javascript" src="{{ asset('datetimepicker/bootstrap_v3/jquery/jquery-1.8.3.min.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ asset('datetimepicker/bootstrap_v3/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('datetimepicker/js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
<script>
	$('.form_date').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });

	$("document").ready(function(){
		$("#frm").submit(function(e){
			e.preventDefault();

			$.ajaxSetup({
			   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
			});

			var token =  $("input[name=_token]").val();
		    var txtTitle = $('#txtTitle').val();
		    var dataString = 'title='+txtTitle+'&token='+token;

		    var urlAddEvent = "{{ URL::to('addEvent') }}";

		    $.ajax({
		        type: 'POST',
		        url: urlAddEvent,
		        data: dataString,
		        success: function(results) {
		        	alert(results.responseText);
		        },
				error: function (results) {
				    alert(results.responseText);
				}
		    }, "json");

		    /*
				Clear Form values
		    */
		    clearForm();

		    /*
				Read Event
		    */
		    var urlReadEvent = "{{ URL::to('readEvent') }}";

		    $.ajax({
	            type: 'GET',
	            url: urlReadEvent,
	            contentType: 'application/json',
	            success: function(results) {
	            	var data = jQuery.parseJSON( results );
					if (data.status) {
						$('#tblCalEvent tbody').html(data.htmlContent); 
					}
	            },
				error: function (results) {
				    alert(results.responseText);
				}
	        });
		});
	});

	function clearForm() {

	    $('#txtTitle').val('');
	    $('#dtpFrom').val('');
	    $('#dtpTo').val('');
	    $('#dteFrom').val('');
	    $('#dteTo').val('');
	    $('#chkMon').attr('checked', false);
	    $('#chkTue').attr('checked', false);
	    $('#chkWed').attr('checked', false);
	    $('#chkThu').attr('checked', false);
	    $('#chkFri').attr('checked', false);
	    $('#chkSat').attr('checked', false);
	    $('#chkSun').attr('checked', false);

	    $('.table tr').each(function() {	    	
	    	$(this).find('td:eq(1)').html('');
	    });

	}

</script>

</body>
</html>
