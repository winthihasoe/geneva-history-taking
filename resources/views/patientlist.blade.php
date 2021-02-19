<x-pagelayout>
@section('title', 'Patient list')

<div class="container mt-3">
    <div class="row justify-content-center">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class=" btn btn-sm btn-default btn-rounded active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Elder</a>
            </li>
            <li class="nav-item " role="presentation">
              <a class="nav-link btn btn-sm btn-default btn-rounded" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Child</a>
            </li>
          </ul>
    </div>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                        <h4 class="mt-3">Elder Patient List</h4>
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
                                <th scope="col">End</th>
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
                                    <td>{{$supervisor_history->end_at}}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Child Care Tab  -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                        <h4 class="mt-3">Child Care List</h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                        <table class="table table-bordered mt-3 table-responsive">
                            
                            ...
                                
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>

</div>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-12 col-xs-12 ">
                <table class="table table-bordered mt-3">
                    
                </table>
            </div>
        </div>
    </div>
</x-pagelayout>