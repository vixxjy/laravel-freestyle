<!doctype html>

<html lang="en">

<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<body>
    
<div class="container">

    <h1>Laravel Bootstrap Datepicker</h1>
    <div class="col-md-4">
         <input class="date form-control" type="text" placeholder="select your date">
    </div>
   

</div>
<hr>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
        <div class="panel panel-primary">

        <div class="panel-heading">

            MY Calender    

        </div>

        <div class="panel-body" >
            
             {!! $calendar->calendar() !!}
            
             {!! $calendar->script() !!}
        </div>

    </div>
        </div>
        
    </div>
</div>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>  

</body>

</html>