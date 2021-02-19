<x-pagelayout>
    @section('title', 'Add Child History')
        <div class="container">
                    <div class="row justify-content-center">
                    <!-- Child History taking form-->
                        <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <form class="form-group border border-light p-5 mt-4" action="{{route('insert_child_history')}}" method="post">
                                 @csrf

                                    <p class="h4 mb-4 text-center">Child History</p>

                                    {{-- Baby Name --}}
                                    @error('patientName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Baby Name" name="babyName" value="{{old('babyName')}}">
                                    
                                    {{-- Age --}}
                                    @error('age')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Age" name="age" value="{{old('age')}}">
                                    
                                    
                                    {{-- Weight --}}
                                    @error('weight')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Weight" name="weight" value="{{old('weight')}}">
                                    
                                    {{-- Birth --}}
                                    @error('birth')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="LSCS or Normal Labour" name="birth" list="birth" value="{{old('birth')}}">
                                    <datalist id="birth">
                                        <option value="LSCS"></option>
                                        <option value="Normal Labour"></option>
                                        <option value="Vaccum delivery"></option>
                                    </datalist>

                                    {{-- Address --}}
                                    @error('address')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Patient Address" name="address" value="{{old('address')}}">
                                    
                                    {{-- phone no --}}
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="number" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Patient phone number" name="phone" value="{{old('phone')}}">
                                    
                                    {{-- Home or Hospital --}}
                                    @error('homeOrHospital')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Home or Hospital" name="homeOrHospital" list="address" value="{{old('address')}}">
                                    <datalist id="address">
                                        <option value="Home"></option>
                                        <option value="Hospital"></option>
                                    </datalist>
                                    
                                    {{-- Medication --}}
                                    @error('medication')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Medication" name="medication" value="{{old('medication')}}">
                                    
                                    
                                    {{-- Breastfeeding --}}
                                    @error('breastfeeding')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Breastfeeding" name="breastfeeding" value="{{old('breastfeeding')}}">
                                    
                                    
                                    

                                    {{-- weaning diet --}}
                                    <label class="form-check-label" for="checkbox">Weaning Diet</label>
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Yes or No! If yes, enter detail" name="weaning" list="weaning" value="{{old('weaning')}}">
                                    <datalist id="weaning">
                                        <option value="Yes"></option>
                                        <option value="No"></option>
                                    </datalist>
                                    @error('weaning')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    
                                    {{-- Bathing --}}
                                    <label class="form-check-label" for="checkbox">Baby Bathing</label>
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="bathing" list="bathing" value="{{old('bathing')}}">
                                    <datalist id="bathing">
                                        <option value="No"></option>
                                        <option value="ချက်ကြွေမှရေချိုးမည်။"></option>
                                    </datalist>
                                    @error('bathing')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    {{-- sleeping --}}
                                    <label class="form-check-label" for="checkbox">Sleeping Pattern</label>
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="sleeping" list="sleeping" value="{{old('sleeping')}}">
                                    <datalist id="sleeping">
                                        <option value="မရှိသေးပါ။"></option>
                                    </datalist>
                                    @error('sleeping')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    {{-- jaundice --}}
                                    <label class="form-check-label" for="checkbox">Jaundice</label>
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="jaundice" list="jaundice" value="{{old('jaundice')}}">
                                    <datalist id="jaundice">
                                        <option value="Yes"></option>
                                        <option value="No"></option>
                                    </datalist>
                                    @error('jaundice')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    {{-- Insulin --}}
                                    <label class="form-check-label" for="checkbox">Insulin Injection</label>
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="insulin" list="insulin" value="{{old('insulin')}}">
                                    <datalist id="insulin">
                                        <option value="No"></option>
                                    </datalist>
                                    @error('insulin')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    {{-- RBS --}}
                                    <label class="form-check-label" for="checkbox">RBS testing</label>
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="rbs" list="rbs" value="{{old('rbs')}}">
                                    <datalist id="rbs">
                                        <option value="No"></option>
                                    </datalist>
                                    @error('rbs')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    
                                    
                                    {{-- Allergy --}}
                                    <label class="form-check-label" for="checkbox">Allergy</label>
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Detail" name="allergy" list="allergy" value="{{old('allergy')}}">
                                    <datalist id="allergy">
                                        <option value="No"></option>
                                    </datalist>
                                    @error('allergy')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <hr>

                                    {{-- CG Name --}}
                                    <label class="form-check-label" for="checkbox">Caregiver Name</label>
                                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" name="caregiverName" value="{{old('caregiverName')}}">
                                    @error('caregiverName')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                
                                    {{-- CG level --}}
                                    <label class="form-check-label" for="checkbox">Caregiver Level</label>
                                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" name="level" list="level" value="{{old('level')}}">
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
                                    <textarea class="form-control md-textarea mb-3" name="do_donts" id="textarea" placeholder="">{{old('do_donts')}}</textarea>
                                    @error('do_donts')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    
                                    {{-- Note to CG --}}
                                    <label for="textarea">Notes to CG</label>
                                    <textarea class="form-control md-textarea" name="note_to_cg" id="textarea" placeholder="">{{old('note_to_cg')}}</textarea><br>
                                    @error('note_to_cg')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    {{-- start date --}}
                                    <label class="form-check-label" for="checkbox">Starting Date</label>
                                    <input type="date" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="" name="start_at" value="{{old('start_at')}}">
                                    @error('start_at')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    
                                    {{-- end date  --}}
                                    <label class="form-check-label" for="checkbox">End Date</label>
                                    <input type="date" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="" name="end_at" value="{{old('end_at')}}">
                                    @error('end_at')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                
                                {{-- duty  --}}
                                    <label class="form-check-label" for="checkbox">Duty</label>
                                    <input type="text" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Day or Night" name="duty" list="duty" value="{{old('duty')}}">
                                    <datalist id="duty">
                                        <option value="Day"></option>
                                        <option value="Night"></option>
                                        <option value="24 Hours"></option>
                                    </datalist>
                                    @error('duty')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror

                                    {{-- save button  --}}
                                    <button class="btn btn-info btn-block my-4" type="submit">Save</button>
                
                    
                </form>
            </div>
</x-pagelayout>