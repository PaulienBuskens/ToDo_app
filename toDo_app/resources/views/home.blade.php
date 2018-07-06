@include('inc.header')


    <div class="container">
        <div class="row">
            <legend>to do app</legend>
    @if(Auth::user())
            @if(session('info'))
                <div class=" alert alert-success"> 
                    {{session('info')}}
                </div> 
            @endif

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                @if(count($items)>0)
                    @foreach($items->all() as $item)
                    
                  <tr class="table-default">
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->dueDate}}</td>
                    <td>
                        <a href='{{url("/read/{$item->id}")}}' class="btn btn-primary">Read</a> |
                        <a href='{{url("/update/{$item->id}")}}' class="btn btn-secondary">Update</a> |
                        <a href='{{url("/delete/{$item->id}")}}' class="btn btn-warning">Delete</a> |
                        <a href="#" class="btn btn-success">Done</a>
                    </td>
                  </tr>
                  @endforeach
                @endif
                </tbody>
            </table> 
            
            @else

            <h2>Please login or sign up to see the to do list</h2>

            @endif
        </div>
        
    </div>

    
@include('inc.footer')