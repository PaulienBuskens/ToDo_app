@include('inc.header')

    <div class="container">
        <div class="row">
            <legend>to do app</legend>

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
                    <td>
                        <a href="{{url('')}}"class="btn btn-primary">Read</a> |
                        <a href="{{url('')}}"class="btn btn-success">Update</a> |
                        <a href="{{url('')}}"class="btn btn-warning">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                @endif
                </tbody>
            </table> 
        </div>
    </div>
    
@include('inc.footer')