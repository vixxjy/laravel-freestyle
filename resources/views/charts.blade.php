<!DOCTYPE html>
<html>
    <head>

    <title>Laravel 5 Chart example using Charts Package</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    {!! Charts::assets() !!}

</head>
<body>

	<div class="container">

		<h1>Implementing laravel charts system</h1>

		{!! $chart->render() !!}
		
		<div class="pull-right">
		    <a href="{{ route('csv')}}"><button class="btn btn-primary">download users</button></a>
		</div>

	</div>
	
	        <div class="container">

            <br/>

            <h1 class="text-center"> Laravel DataTables</h1>

            <br/>

            <table class="table table-bordered" id="users-table">

                <thead>

                    <tr>

                        <th>Id</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Created At</th>

                        <th>Updated At</th>

                    </tr>

                </thead>

            </table>

        </div>

        <script src="//code.jquery.com/jquery.js"></script>

        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>

        $(function() {

            $('#users-table').DataTable({

                processing: true,

                serverSide: true,

                ajax: '{!! route('provide.data') !!}',

                columns: [

                    { data: 'id', name: 'id' },

                    { data: 'name', name: 'name' },

                    { data: 'email', name: 'email' },

                    { data: 'created_at', name: 'created_at' },

                    { data: 'updated_at', name: 'updated_at' }

                ]

            });

        });

        </script>

        <!--@stack('scripts')-->

</body>
</html>