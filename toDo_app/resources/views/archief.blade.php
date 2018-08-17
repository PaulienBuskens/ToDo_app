@include('inc.header')

<div class="container">
        <div class="row">
            <legend>gearchieveerde To Do's</legend>
    @if(Auth::user())
            @if(session('info'))
                <div class=" alert alert-success"> 
                    {{session('info')}}
                </div> 
            @endif

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                @if(count($archiefs)>0)
                    @foreach($archiefs->all() as $archief)
                    
                  <tr class="table-default">
                    <td>{{$archief->title}}</td>
                    <td>{{$archief->description}}</td>
                    <td>{{$archief->dueDate}}</td>
                    <td>
                        <a href='{{url("/deleteDone/{$archief->id}")}}' class="btn btn-warning">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                @endif
                </tbody>
            </table> 
        @endif
        </div>
    </div>

@include('inc.footer')