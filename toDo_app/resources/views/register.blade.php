@include('inc.header')

<form>
  <fieldset class="col-sm-3" >
    <legend>Register</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <label for="name">Name :</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Email :</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password :</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password :</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
    </div>
   
    </fieldset>
    
    <fieldset class="col-sm-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>

@include('inc.footer')