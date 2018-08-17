@include('inc.header')

    <div class="container">
        <legend>Read Item</legend>
            <div class="card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">Read Item {{$items->title}}</div>
            <div class="card-body">
                <h4 class="card-title">{{ $items->title}}</h4>
                    <p class="card-text">{{ $items->description}}</p>
                    <p class="card-text">{{ $items->dueDate}}</p>
                </div>
            </div>
            <hr>
            <div class="comments">
                <ul class="list-group">
                    @foreach ($items->comments as $comment)
                        <li class="list-group-item">
                        <strong>{{$comment->created_at->diffForHumans()}}: &nbsp;</strong>
                            {{ $comment->body }}
                        </li>
                    @endforeach
            </ul>
            </div>
    </div>
    

@include('inc.footer')