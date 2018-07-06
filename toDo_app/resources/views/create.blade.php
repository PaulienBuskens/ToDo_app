@include('inc.header')
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ url('/insert')}}">
                    {{csrf_field()}}
                    <fieldset>
                        <legend>To Do app</legend>
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-warning">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                     
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">due Date</label>
                            <input type="text" name="dueDate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dueDate">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ url('/')}}" class="btn btn-warning">Cancel</a>
                    </fieldset>
            </form>
            </div>
        </div>
    </div>
@include('inc.footer')