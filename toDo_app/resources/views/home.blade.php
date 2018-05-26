@include('inc.header')

    <div class="container">
        <div class="row">
            <legend>to do app</legend>
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

                  <tr class="table-default">
                    <th scope="row">Default</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>
                        <a href="{{url('')}}"class="btn btn-primary">Read</a> |
                        <a href="{{url('')}}"class="btn btn-success">Update</a> |
                        <a href="{{url('')}}"class="btn btn-warning">Delete</a>
                    </td>
                  </tr>

                </tbody>
            </table> 
        </div>
    </div>
    
@include('inc.footer')