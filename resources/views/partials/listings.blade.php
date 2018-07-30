<div class="mb-5">
  <div class="row">
    <div class="col-12">
      <h3 class="my-0 mb-4 font-weight-bold">Listings</h3>
      <h5 class="my-0 mb-3 font-weight-bold">Choose the Properties You Want to Promote</h5>
      <p class="lead">With us, you select the properties and developments you wish to promote. Our continually expanding portfolio of properties allows you the luxury of choosing which properties best suit your client list. The main benefit of this is together we are sure you always find offers that will profitably appeal to your audience, maximising your chance of completing a sale.</p>

      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th class="px-2 py-3" width="200">Thumbnail</th>
            <th class="px-2 py-3">Name</th>
            <th class="px-2 py-3">Status</th>
            <th class="px-2 py-3" width="100">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listings as $key => $listing)
            <tr>
              <td class="px-2 py-3 text-center"><img class="shadow" src="{{ env('APP_MAIN_URL') . '/uploads/thumbnails/' . $listing->thumbnail }}" width="180" alt="{{ $listing->name }}" /></td>
              <td class="px-2 py-3">
                <div class="link-name border-bottom pb-2 mb-2 h5">
                  <span class="badge badge-success font-weight-bold">[{{ $listing->refno }}]</span> <span class="font-weight-bold">{{ $listing->name }}</span>
                </div>
                <div class="info_affiliate_link">
                  <p><strong>Link:</strong> {{ env('APP_MAIN_URL') . '/property-details/'. $listing->id .'/'. $listing->slug .'?aid='. auth()->user()->id .'' }}</p>
                  <div class="alert alert-secondary" role="alert">
                    {{ '<a href="'. env('APP_MAIN_URL') . '/property-details/'. $listing->id . '/' . $listing->slug . '?aid=' . auth()->user()->id .'" target="_blank"><img src="'. env('APP_MAIN_URL') . '/uploads/' . $listing->image .'" alt="'. $listing->name .'"></a>' }}
                  </div>
                </div>
              </td>
              <td class="px-2 py-3 text-center">
                @if ($listing->web_visible)
                  <span class="font-weight-bold text-success">Enable</span>
                @else
                  <span class="font-weight-bold text-danger">Disabled</span>
                @endif
              </td>
              <td class="px-2 py-3 text-center">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="{{ env('APP_MAIN_URL') . '/property-details/'. $listing->id .'/'. $listing->slug .'' }}" target="_blank" rel="nofollow,noindex"><i class="fas fa-external-link-alt"></i></a>
                  </li>
                </ul>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-auto mx-auto">
      {{ $listings->links() }}
    </div>
  </div>
</div>
