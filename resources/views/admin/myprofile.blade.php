<x-adminlayout>

<div class="container">
<h3 class="mt-4 mb-4">{{auth()->user()->username}} Profile</h3>

<form class="border border-light p-5" action="{{route('updateprofile')}}" method="post" enctype="multipart/form-data">
@csrf

    @if(Session('success'))
        <div class="alert alert-success">
            {{Session('success')}}
        </div>
    @endif
    <label for="">Your Name</label>
    <input type="text" name="username"id="defaultLoginFormEmail" class="form-control mb-4" value="{{auth()->user()->username}}">
    
    <label for="">Email</label>
    <input type="text" name="email" id="defaultLoginFormEmail" class="form-control mb-4" value="{{auth()->user()->email}}">

    <label for="">Old Password</label>
    <input type="password" name="oldpassword" id="defaultLoginFormEmail" class="form-control mb-4">
    <label for="">New Password</label>
    <input type="password" name="newpassword" id="defaultLoginFormEmail" class="form-control mb-4">

    
    <!-- Add post button -->
    <button class="btn btn-info btn-block my-4" data-toggle="modal" data-target="#modalLoginForm" type="submit" >Update Profile</button>

</form>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Are You sure to update Your profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-danger">Cancel</button>
        <a href="" class="btn btn-success">Sure</a>

      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4">Launch
    Modal Login Form</a>
</div>
</x-adminlayout>