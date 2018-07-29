@extends('layouts.default')


{{-- @section('meta_title', '') --}}
{{-- @section('meta_description', '') --}}
{{-- @section('meta_keywords', '') --}}


@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
          <h1 class="display-4">{{ env('APP_NAME') }} Affiliates</h1>
          <p class="lead">Welcome Aboard! Every new day is another chance to change your life. <a href="#">Learn how to get started</a> of {{ env('APP_NAME') }} Affiliates.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="card-deck mb-3 text-center">
      {{-- <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Eligibility For Next Payout</h4>
        </div>
        <div class="card-body">
          <h3 class="card-title pricing-card-title">$0</h3>
          <ul class="list-unstyled mt-3 mb-4">
            <li><span class="text-primary"><i class="fas fa-info"></i> Only commissions approved by manager are eligible for a payout</span></li>
            <li>You have earned $0.00 of the minimum $75.00 requirement.</li>
          </ul>
        </div>
      </div> --}}
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Your Affiliate Link</h4>
        </div>
        <div class="card-body">
          <h3 class="card-title pricing-card-title">https://luxurypropertiespattaya.com/?aid=<span class="text-muted">{{ auth()->user()->id }}</span></h3>
          <ul class="list-unstyled mt-3 mb-4">
            <li><p class="lead mb-0">Everything starts with your personal link. Promote it freely!</p></li>
            <li>Copy & Share your unique link with your friends or website visitors</li>
          </ul>
        </div>
      </div>
    </div>

    @if ($listings && $listings->count())
      @include('partials.listings')
    @endif

    @if ($affiliateLinks && $affiliateLinks->count())
      <h3 class="my-0 mb-3 font-weight-bold">Links</h3>
      <div class="row mb-5">
        <div class="col-12">
          @forelse ($affiliateLinks as $key => $item)
            <h5 class="font-weight-normal">{{ ($loop->index + 1) . '. ' . $item->name }}</h5>
            <div class="text-center">
              <div class="alert alert-secondary" role="alert">
                {{ env('APP_MAIN_URL') . $item->uri . '?aid='. auth()->user()->id }}
              </div>
              <div class="alert alert-secondary" role="alert">
                {{ '<a href="'. env('APP_MAIN_URL') . $item->uri . '?aid='. auth()->user()->id .'" target="_blank">'. $item->name .'</a>' }}
              </div>
            </div>
          @empty

          @endforelse
        </div>
      </div>
    @endif

    @if ($affiliateBanners && $affiliateBanners->count())
      <h3 class="my-0 mb-3 font-weight-bold">Banners</h3>
      <div class="row">
        <div class="col-12">
          @forelse ($affiliateBanners as $key => $item)
            @if ($item->thumbnail)
              <h5 class="font-weight-normal">{{ ($loop->index + 1) . '. ' . $item->name }}</h5>
              @if ($item->description)
                <p class="text-secondary">{{ $item->description }}</p>
              @endif
              <div class="text-center">
                <figure class="figure">
                  <img src="{{ $item->thumbnail }}" class="figure-img img-fluid" alt="{{ $item->name }}">
                </figure>
                <div class="alert alert-secondary" role="alert">
                  {{ '<a href="'. env('APP_MAIN_URL') . $item->uri . '?aid='. auth()->user()->id .'" target="_blank"><img src="'. $item->thumbnail .'" alt="'. $item->name .'"></a>' }}
                </div>
              </div>
            @else

            @endif
          @empty

          @endforelse
        </div>
      </div>
    @endif
  </div>
@endsection


@push('head_scripts')
@endpush


@push('footer_scripts')
@endpush
