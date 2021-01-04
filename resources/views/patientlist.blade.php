<x-pagelayout>
@section('title', 'Patient list')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                <h4 class="mt-4">Patient List added by You</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Start</th>
                        <th scope="col">Supervisor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supervisor_histories as $supervisor_history)                    
                            <tr>
                            <th>{{$loop->iteration}}</th>
                            <td><a href="{{route('singlePatient',$supervisor_history->id)}}" class="text-secondary">{{$supervisor_history->patientName}}</a></td>
                            <td>{{$supervisor_history->age}}</td>
                            <td>{{$supervisor_history->address}}</td>
                            <td>{{$supervisor_history->start_at}}</td>
                            <th>{{$supervisor_history->user->username}}</th>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-pagelayout>