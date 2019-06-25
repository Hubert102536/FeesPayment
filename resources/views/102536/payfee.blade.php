@extends ('102536.master')

@section('links')
    <a class="navbar-brand" href="/add">Add a Student</a>
    <a class="navbar-brand" href="/payfee/">Pay Fees</a>
    <a class="navbar-brand" href="/payments">Payment History</a>
@endsection

@section('content')
    <br>
    <div class="container">
        <div class="jumbotron">
            <h3>Results for {{$student->fullName}}</h3>
            <h4>Student Number - {{$student->id}}</h4>
            <h5>Fees Balance = <strong>{{$student->Balance}}</strong></h5>
        </div>

        <div class="container">
            <h3>Enter amount to be paid</h3>

            <form action="/paid/finished" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-sm-5">
                        <input required type="number" class="form-control" name="amount" placeholder="Amount to be paid">
                    </div>
                </div>
                <input readonly type="hidden" name="student_id" value="{{$student->id}}">
                {{--<input type="hidden" name="Balance" value="{{$student->Balance}}">--}}

                <div class="form-group">
                    <div class="col-sm-5">
                        <input type="submit" class="form-control btn btn-success" value="Submit Fees">
                    </div>
                </div>
                </form>
        </div>
    </div>
@endsection
