@extends ('102536.master')

    @section('content')
        <br>
        <div class="container">
            <div class="jumbotron align-content-center">
                <h1 >Student fee System</h1>
            </div>
        </div

        <div class="container">
            <a href="/add"><button type="button"  class="btn btn-primary btn-lg btn-block">Add a student</button>
            </a>
            <br>
            <a href="/payfee">
                <button type="button" class="btn btn-success btn-lg btn-block">Pay fees</button>
            </a>
            <br>
            <a href="/payments">
                <button type="button" class="btn btn-info btn-lg btn-block">Show Student Payments</button>
            </a>

        </div>
        <br>
        <div class="container">
            <div class="jumbotron">
                    <h2>Total amount paid = <strong>{{$fee}}</strong></h2>
            </div>
        </div>
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Student Number</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Gender</th>
                    <th scope="col">address</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                    {{--<th scope="row">1</th>--}}
                    <td>{{$student->id}}</td>
                    <td>{{$student->fullName}}</td>
                    <td>{{$student->Balance}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->Address}}</td>
                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>




    @endsection
