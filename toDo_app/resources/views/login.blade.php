@include('inc.header')

<form action="login_check" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">

  <fieldset class="col-sm-3" >
    <legend>Login form</legend>
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control"  placeholder="Enter Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password :</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
   
    </fieldset>
    
    <fieldset class="col-sm-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>

</form>

@include('inc.footer')