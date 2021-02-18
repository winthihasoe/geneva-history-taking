<x-pagelayout>
@section('title', 'Patient Detail')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10 col-xs-12">
            @if(Session('message'))
                <div class="alert alert-success">{{Session('message')}}</div>
            @endif
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                          <th colspan="2" class="text-center"><b>{{$patient->patientName}}</b></th>
                        </tr>
                      </thead>
                    <tbody>
                      <tr>
                        <th>Age</th>
                        <td>{{$patient->age}}</td> 
                      </tr>
                      <tr>
                        <th>Disease</th>
                        <td>{{$patient->disease}}</td> 
                      </tr>
                      <tr>
                        <th>Weight</th>
                        <td>{{$patient->weight}}</td> 
                      </tr>
                      <tr>
                        <th>Patient Address</th>
                        <td>{{$patient->address}}</td> 
                      </tr>
                      <tr>
                        <th>Patient Phone</th>
                        <td>{{$patient->phone}}</td> 
                      </tr>
                      <tr>
                        <th>Home or Hospital</th>
                        <td>{{$patient->homeOrHospital}}</td> 
                      </tr>
                      <tr>
                        <th>Medication</th>
                        <td>{{$patient->medication}}</td> 
                      </tr>
                      <tr>
                        <th>Canula</th>
                        <td>{{$patient->canula}}</td> 
                      </tr>
                      <tr>
                        <th>Ryle's Tube</th>
                        <td>{{$patient->ryleTube}}</td> 
                      </tr>
                      <tr>
                        <th>Catheter</th>
                        <td>{{$patient->catheter}}</td> 
                      </tr>
                      <tr>
                        <th>Suction</th>
                        <td>{{$patient->suction}}</td> 
                      </tr>
                      <tr>
                        <th>Drip</th>
                        <td>{{$patient->drip}}</td> 
                      </tr>
                      <tr>
                        <th>Insulin Injection</th>
                        <td>{{$patient->insulin}}</td> 
                      </tr>
                      <tr>
                        <th>RBS</th>
                        <td>{{$patient->rbs}}</td> 
                      </tr>
                      <tr>
                        <th>Allergy</th>
                        <td>{{$patient->allergy}}</td> 
                      </tr>
                      <tr>
                        <th>CG Name</th>
                        <td>{{$patient->caregiverName}}</td> 
                      </tr>
                      <tr>
                        <th>CG Level</th>
                        <td>{{$patient->level}}</td> 
                      </tr>
                      <tr>
                        <th>Do and Don'ts</th>
                        <td>{{$patient->do_donts}}</td> 
                      </tr>
                      <tr>
                        <th>Notes to CG</th>
                        <td>{{$patient->note_to_cg}}</td> 
                      </tr>
                      <tr>
                        <th>Starting Date</th>
                        <td>{{$patient->start_at}}</td> 
                      </tr>
                      <tr>
                        <th>End Date</th>
                        <td>{{$patient->end_at}}</td> 
                      </tr>
                      <tr>
                        <th>Duty</th>
                        <td>{{$patient->duty}}</td> 
                      </tr>
                      <tr>
                        <th colspan="2" class="text-center"><a href="{{route('editHistory',$patient->id)}}" class="btn btn-sm btn-secondary">Edit History</a><a class="btn btn-danger btn-sm ml-3" href="{{route('patientlist')}}">Back</a></th> 
                        
                      </tr>
                      
                    </tbody>
                  </table>    
            </div>
        </div>
    </div>

</x-pagelayout>