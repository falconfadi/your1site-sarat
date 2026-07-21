@php
    $segments = request()->segments();
    $title = '';
@endphp

<nav aria-label="breadcrumb" class="breadcrumbs-nav ">
    <ol class="breadcrumbs-list" style="display: flex; list-style: none; padding: 0; margin: 0; gap: 0.5rem; align-items: center;">
        @foreach($segments as $index => $segment)
            @php
                $title .= ucwords(str_replace(['-', '_'], ' ', $segment));
                $isLast = $loop->last;
                if(!$isLast){
	                $title .= ' . ';
                }
            @endphp
        @endforeach
        <span class="eyebrow">{{$title}}</span>
    </ol>
</nav>
