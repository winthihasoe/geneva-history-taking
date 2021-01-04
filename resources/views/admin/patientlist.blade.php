<x-adminlayout>
@section('title', 'Patient list')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                <h2 class="mt-3">Patient List</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                <table class="table table-bordered mt-3 table-responsive">
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
                        @foreach ($patients as $patient)                    
                            <tr>
                            <th>{{$loop->iteration}}</th>
                            <td><a href="{{route('admin.singlePatient',$patient->id)}}" class="text-secondary">{{$patient->patientName}}</a></td>
                            <td>{{$patient->age}}</td>
                            <td>{{$patient->address}}</td>
                            <td>{{$patient->start_at}}</td>
                            <th>{{$patient->user->username}}</th>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-adminlayout>