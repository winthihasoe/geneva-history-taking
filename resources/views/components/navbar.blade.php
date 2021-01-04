{{-- navbar  --}}
    <nav class="mb-1 navbar navbar-expand-md navbar-dark sticky-top py-0 nav-manual">
    
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('images/Logo.png')}}" width="80px" alt="Geneva"></a>
        <a class="nav black-text" href="#">{{auth()->user()->username}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{request()->path()==='home' ? 'active' : ''}}">
                    <a class="nav-link " href="{{route('home')}}">Home
                    <span class="sr-only">Home</span>
                    </a>
                </li>
                <li class="nav-item {{request()->path()==='addhistory' ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('addhistory')}}">Add History</a>
                </li>
                
                <li class="nav-item {{request()->path()==='patientlist' ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('patientlist')}}">Patient List</a>
                </li>
                
                @can('admin')
                <li class="nav-item {{request()->path()==='admin/index' ? 'active' : ''}}">
                    <a class="nav-link " href="{{route('admin.index')}}">Admin</a>
                </li>
                @endcan

            </ul>
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{route('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    
    </nav> {{-- end of navbar --}}