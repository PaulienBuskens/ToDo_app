@include('inc.header')

<form>

  <fieldset class="col-sm-3" >
    <legend>Login form</legend>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control"  placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
   
    </fieldset>
    
    <fieldset class="col-sm-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>

</form>

@include('inc.footer')