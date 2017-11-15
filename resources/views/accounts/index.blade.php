@extends('app')

@section('page_styles')

    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">

    <script src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>


    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>

@endsection



@section('content')
    <br/>





    <div class="container" style="width: 100%" >
        <div class="box box-default" style="padding: 20px 50px 0px 20px;">

            <div class="box-header with-border">

                <div style="width:100%;padding:5px 5px 15px 10px;">

                    <div class="panel panel-info" >

                        <div class="panel-heading"><h1>Project Accounts</h1></div>


                        <div class="panel-body">


                            <div class="panel-body">

                                <div class="form-group" style="padding:20px 30px 20px 20px;">

                                    <a class="btn btn-small btn-info pull-right" href="{{ URL::to('accounts/create') }}">  Create New Account</a>

                                    <a class="btn btn-small btn-info pull-right" href="{{ url('/accountunhide') }}" style="margin-right: 2%"> Show Hidden Accounts</a>

                                </div>


                                </br>

                                <table class="table table-striped table-bordered" id="myTable">

                                    <thead style="background-color: #34cccd; color: white; font-size: 110%;">

                                    <tr>

                                        <td style="width: 1%">ID</td>
                                        <td style="width: 25%">Account Name</td>
                                        <td style="width: 25%">Description</td>
                                        <td>Account Head</td>
                                        <td>Show / Edit</td>


                                    </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($accounts as $key => $account)

                                        @if($account->Hide==="off")

                                            <tr>

                                                <td>{{ $account->id }}</td>
                                                <td>{{ $account->acc_name }}</td>
                                                <td>{{ $account->description }}</td>
                                                <td>{{ $account->acc_head }}</td>


                                                <!-- we will also add show, edit, and delete buttons -->

                                                <td>



                                                    {!! Form::model($account, [ 'method' => 'POST',
                                                                      'route' => ['accounts.hide', $account->id]]) !!}



                                                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                                    <a class="btn btn-small btn-success" href="{{ URL::to('accounts/' . $account->id) }}">Show</a>
                                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                                    <a class="btn btn-small btn-info" href="{{ URL::to('accounts/' . $account->id . '/edit') }}">Edit</a>
                                                    {!! Form::submit('Hide', ['class' => 'btn btn-primary']) !!}
                                                    {!! Form::close() !!}

                                                </td>

                                                @endif
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection

    @section('page_script2')
            <!--script type="text/javascript"
            src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"
            src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script-->

    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">

    <script src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>


    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#myTable').dataTable();
        });
    </script>
@endsection

