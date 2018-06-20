@include('inc.header')

<form action="login_check" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">

  <fieldset class="col-sm-3" >
    <legend>Login form</legend>
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      @if($errors->has('email')) <p>{{$errors->first('email')}}</p>
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password :</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      @if($errors->has('password')) <p>{{$errors->first('password')}}</p>
      @endif
    </div>
   
    </fieldset>
    
    <fieldset class="col-sm-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>

</form>

@include('inc.footer')