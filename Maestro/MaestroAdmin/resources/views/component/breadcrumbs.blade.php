@if(!empty($breadcrumbs))
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach($breadcrumbs as $key => $crumb)

                @if($key == count($breadcrumbs) - 1)
                    <li class="breadcrumb-item active" aria-current="page">{{ $crumb['text'] }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $crumb['href'] }}">{{ $crumb['text'] }}</a></li>
                @endif

            @endforeach

        </ol>
    </nav>
@endif