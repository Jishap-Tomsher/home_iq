@extends('layouts.app')

@section('title', 'Home - HOME_IQ')

@section('content')
    <x-home.hero />

    {{-- âœ… Categories Section --}}
    @if(isset($categories) && count($categories) > 0)
        <x-home.category :categories="$categories" />
    @endif

    {{-- âœ… Products Section (Only Show 3 Latest Products) --}}
    @if(isset($products) && count($products) > 0)
        <x-home.products-grid :products="$products" />
    @else
        <p class="text-center text-gray-600">ðŸš¨ No products available at the moment.</p>
    @endif

    {{-- âœ… Services Section --}}
    @if(isset($services) && count($services) > 0)
        <x-home.services :services="$services" />
    @endif

    {{-- âœ… Why Choose Us Section --}}
    <x-home.why-choose-us />

    {{-- âœ… Testimonials Section --}}
    @if(isset($testimonials) && count($testimonials) > 0)
        <x-home.testimonials :testimonials="$testimonials" />
    @endif

    {{-- âœ… Blog Section --}}
    @if(isset($blogs) && count($blogs) > 0)
        <x-blogList :blogs="$blogs" />
    @endif

    {{-- âœ… JavaScript --}}

<link rel="stylesheet" href="{{ asset('dist/assets/app-e73f145a.css') }}">
<link rel="stylesheet" href="{{ asset('dist/assets/app-ecd62c39.css') }}">
<script type="module" src="{{ asset('dist/assets/app-44e25b4d.js') }}"></script>

    
@endsection
