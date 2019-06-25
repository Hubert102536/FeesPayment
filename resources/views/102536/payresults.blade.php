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
            <h3>Past Payments for {{$name}}</h3>

            {{--<h5>Fees Balance = <strong>{{$student->Balance}}</strong></h5>--}}
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Transaction id</th>
                <th scope="col">Student Number</th>
                <th scope="col">Amount Paid</th>
                <th scope="col">Paid On</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fees as $fee)
                <tr>
                    {{--<th scope="row">1</th>--}}
                    <td>{{$fee->id}}</td>
                    <td>{{$fee->student_id}}</td>
                    <td>{{$fee->amount}}</td>
                    <td>{{$fee->created_at->format('j M Y , g:ia')}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

@endsection
