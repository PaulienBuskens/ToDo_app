@include('inc.header')

    <div class="container">
        <div class="row">
        <legend>Read Item</legend>
            <div class="card border-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">Read Item {{$items->id}}</div>
            <div class="card-body">
                <h4 class="card-title">{{ $items->title}}</h4>
                    <p class="card-text">{{ $items->description}}</p>
                </div>
            </div>
        </div>
    </div>

@include('inc.footer')