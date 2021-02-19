<x-pagelayout>
@section('title', 'Edit History')
    <div class="container">
        <div class="row justify-content-center">
            <!-- History taking form-->
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            @if(Session('message'))
                <div class="alert alert-success">{{Session('message')}}</div>
            @endif
            <form class="form-group border border-light border-round p-5 shadow-3-strong mt-4" action="{{route('update_history',$patient->id)}}" method="post">
            @csrf

                <p class="h4 mb-4 text-center">Edit <span class="blue-text">{{$patient->patientName}}</span> History</p>

                {{-- Patient Name --}}
                @error('patientName')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Patient Name" name="patientName" value="{{$patient->patientName}}">
                
                {{-- Age --}}
                @error('age')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Age" name="age" value="{{$patient->age}}">
                
                {{-- c/o --}}
                @error('disease')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Disease" name="disease" value="{{$patient->disease}}">
                
                {{-- Weight --}}
                @error('weight')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Weight" name="weight" value="{{$patient->weight}}">
                
                {{-- Address --}}
                @error('address')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Patient Address" name="address" value="{{$patient->address}}">
                
                {{-- phone no --}}
                @error('phone')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Patient phone number" name="phone" value="{{$patient->phone}}">
                
                {{-- Home or Hospital --}}
                @error('homeOrHospital')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Home or Hospital" name="homeOrHospital" list="address" value="{{$patient->address}}">
                <datalist id="address">
                    <option value="Home"></option>
                    <option value="Hospital"></option>
                </datalist>
                
                {{-- Medication --}}
                @error('medication')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Medication" name="medication" value="{{$patient->medication}}">
                
                {{-- Canula --}}
                @error('canula')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Canula" name="canula" list="canula" value="{{$patient->canula}}">
                <datalist id="canula">
                    <option value="Yes"></option>
                    <option value="No"></option>
                </datalist>
                

                {{-- Ryle's tube --}}
                <label class="form-check-label" for="checkbox">Ryle's tube feeding</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="ryleTube" list="ryleTube" value="{{$patient->ryleTube}}">
                <datalist id="ryleTube">
                    <option value="No"></option>
                </datalist>
                @error('ryleTube')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                
                {{-- Catheter --}}
                <label class="form-check-label" for="checkbox">Catheter</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="catheter" list="catheter" value="{{$patient->catheter}}">
                <datalist id="catheter">
                    <option value="No"></option>
                </datalist>
                @error('catheter')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                {{-- Suction --}}
                <label class="form-check-label" for="checkbox">Suction</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="suction" list="suction" value="{{$patient->suction}}">
                <datalist id="suction">
                    <option value="No"></option>
                </datalist>
                @error('suction')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                {{-- Drip --}}
                <label class="form-check-label" for="checkbox">Drip</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="drip" list="drip" value="{{$patient->drip}}">
                <datalist id="drip">
                    <option value="No"></option>
                </datalist>
                @error('drip')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                {{-- Insulin --}}
                <label class="form-check-label" for="checkbox">Insulin Injection</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="insulin" list="insulin" value="{{$patient->insulin}}">
                <datalist id="insulin">
                    <option value="No"></option>
                </datalist>
                @error('insulin')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                {{-- RBS --}}
                <label class="form-check-label" for="checkbox">RBS testing</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="rbs" list="rbs" value="{{$patient->rbs}}">
                <datalist id="rbs">
                    <option value="No"></option>
                </datalist>
                @error('rbs')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                {{-- Infection --}}
                <label class="form-check-label" for="checkbox">Infection</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="infection" list="infection" value="{{old($patient->infection)}}">
                <datalist id="infection">
                    <option value="No"></option>
                    <option value="HBV"></option>
                    <option value="HCV"></option>
                    <option value="HIV"></option>
                    <option value="TB"></option>
                    <option value="Covid"></option>
                </datalist>
                @error('infection')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                
                
                {{-- Allergy --}}
                <label class="form-check-label" for="checkbox">Allergy</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="allergy" list="allergy" value="{{$patient->allergy}}">
                <datalist id="allergy">
                    <option value="No"></option>
                </datalist>
                @error('allergy')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <hr>

                {{-- CG Name --}}
                <label class="form-check-label" for="checkbox">Caregiver Name</label>
                <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Caregiver Name" name="caregiverName" value="{{$patient->caregiverName}}">
                @error('caregiverName')
                    <p class="text-danger">{{$message}}</p>
                @enderror
               
                {{-- CG level --}}
                <label class="form-check-label" for="checkbox">Caregiver Level</label>
                <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Caregiver Level" name="level" list="level" value="{{$patient->level}}">
                <datalist id="level">
                    <option value="Advanced"></option>
                    <option value="Skill"></option>
                    <option value="Semi"></option>
                </datalist>
                @error('level')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                {{-- Do and Dont's --}}
                <label for="textarea">Do and Don'ts</label>
                <textarea class="form-control md-textarea mb-3" name="do_donts" id="textarea" placeholder="">{{$patient->do_donts}}</textarea>
                @error('do_donts')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                
                {{-- Note to CG --}}
                <label for="textarea">Notes to CG</label>
                <textarea class="form-control md-textarea" name="note_to_cg" id="textarea" placeholder="">{{$patient->note_to_cg}}</textarea><br>
                @error('note_to_cg')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                {{-- start date --}}
                <label class="form-check-label" for="checkbox">Starting Date</label>
                <input type="date" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="" name="start_at" value="{{$patient->start_at}}">
                @error('start_at')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                
                {{-- end date  --}}
                <label class="form-check-label" for="checkbox">End Date</label>
                <input type="date" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="" name="end_at" value="{{$patient->end_at}}">
                @error('end_at')
                    <p class="text-danger">{{$message}}</p>
                @enderror
               
               {{-- duty  --}}
                <label class="form-check-label" for="checkbox">Duty</label>
                <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Day or Night" name="duty" list="duty" value="{{$patient->duty}}">
                <datalist id="duty">
                    <option value="Day"></option>
                    <option value="Night"></option>
                    <option value="24 Hours"></option>
                </datalist>
                @error('duty')
                    <p class="text-danger">{{$message}}</p>
                @enderror

                {{-- save button  --}}
                <button class="btn btn-info btn-block mt-4" type="submit">Update</button>

                {{-- Cancel button  --}}
                <a class="btn btn-danger btn-block my-2" href="{{route('singlePatient',$patient->id)}}">Cancel</a>
            
                
            </form>
        </div>

        </div>
    </div>
</x-pagelayout>