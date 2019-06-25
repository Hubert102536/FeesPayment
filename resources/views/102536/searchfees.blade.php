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
            <h3>Enter student number</h3>
                <form class="form-horizontal" method="get" action="/search">
                    <div class="form-group">
                    <div class="col-sm-5">
                        <input required type="number" class="form-control" name="id" placeholder="Search Student number">
                    </div>
                    </div>
                    <div class="form-group">
                        <div class=" col-sm-5">
                            <input type="submit" class="btn btn-default" value="Search Student">
                        </div>
                    </div>
                </form>

        </div>
    </div>

    @endsection
