<x-authlayout>
@section('title', 'Login')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-8 col-xs-8  mt-5 mb-0">
                <img src="{{asset('images/Logo.png')}}" width="120px" class="img-fluid" alt="Geneva">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-8 col-xs-8  mt-2">
    
            <!-- authentication failed -->
            @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif
    
            <form class="text-center border border-light p-5" action="{{route('post_login')}}" method="post">
            @csrf
                <p class="h4 mb-4 red-text">Sign in</p>
            
                <!-- Email -->
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" value="{{old('email')}}">

                @error("email")
                    <div class="text-danger mb-4">{{$message}}</div>
                @enderror
                <!-- Password -->
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" name="password">
                @error("password")
                    <div class="text-danger" mb-4>{{$message}}</div>
                @enderror
                <div class="d-flex justify-content-around">
    
                   <!-- Checkbox -->
                    <div class="form-check">
                        <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="form1Example3"
                        checked
                        />
                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                    </div>
                    

                </div>
            
                <!-- Sign in button -->
                <button class="btn btn-red white-text  btn-block my-4" type="submit">Sign in</button>
            
                <!-- Register -->
                <p>Not a member?
                    <a href="{{route('register')}}">Register</a>
                </p>
            
               
            
            </form>
            
            </div>
        </div> {{--end of row--}}
        
    </div>
</x-authlayout>

    