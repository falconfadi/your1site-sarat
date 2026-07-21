@php
    // Get all segments from the current URL path
    $segments = request()->segments();
    $url = '';
@endphp

<nav aria-label="breadcrumb" class="breadcrumbs-nav ">
    <ol class="breadcrumbs-list" style="display: flex; list-style: none; padding: 0; margin: 0; gap: 0.5rem; align-items: center;">
        
        {{-- Home Link --}}
        {{-- <li class="breadcrumb-item">
            <a href="/" style="text-decoration: none; color: var(--primary-color, #007bff);">
                <i class="bi bi-house-door"></i> Home
            </a>
        </li> --}}

        {{-- Dynamic Loop for URL Segments --}}
        @foreach($segments as $index => $segment)
            @php
                // Build the URL segment by segment
                $url .= '/' . $segment;
                $isLast = $loop->last;
                
                // Clean up the text (e.g., "user-profiles" becomes "User Profiles")
                $title = ucwords(str_replace(['-', '_'], ' ', $segment));
            @endphp



            <li class="breadcrumb-item {{ $isLast ? 'active' : '' }}" {{ $isLast ? 'aria-current=page' : '' }}>
                @if($isLast)
                    {{-- Active page text (not clickable) --}}
                    <span style="color: #6c757d; font-weight: 500;">{{ $title }}</span>
                @else
                    {{-- Intermediate link --}}
                    <a href="{{ $url }}" style="text-decoration: none; color: var(--primary-color, #007bff);">
                        {{ $title }}
                    </a>
                @endif
            </li>

            {{-- Separator Icon --}}
            <span class="breadcrumb-separator" style="color: #6c757d; font-size: 0.85rem;">
                {{-- <i class="bi bi-chevron-right"></i> --}}
                .
            </span>
        @endforeach
    </ol>
</nav>
