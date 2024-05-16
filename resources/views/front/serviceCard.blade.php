<div class="row service-items">
    @foreach ($properties as $item)
        <div class="col-xl-4 col-lg-6 col-sm-6 service-item" data-category="{{ $item->category }}">
            <div class="service-image">
                <img src="{{ asset('public/front/images/product/' . $item->featured_image) }}" alt="{{ $item->name }}">
            </div>
            <div class="service-detail-container">
                <div class="service-rate px-3 py-2">
                    Rate – ${{ $item->min_rate }}-${{ $item->max_rate }}/night
                </div>
                <div class="service-detail py-4 px-3 text-start">
                    <div class="service-title">
                        <h5>{{ $item->name }}</h5>
                    </div>
                    <p class="service-desc">
                        {{ $item->short_description }}
                    </p>
                    <div class="service-spec row m-0">
                        <div class="col-3">
                            <span><img src="{{ asset('public/front/images/bed.png') }}" alt=""></span>
                            {{ $item->bedroom }} Bed
                        </div>
                        <div class="col-3">
                            <span><img src="{{ asset('public/front/images/bath.png') }}" alt=""></span>
                            {{ $item->bathroom }} Bath
                        </div>
                        <div class="col-3">
                            <span><img src="{{ asset('public/front/images/scale.png') }}" alt=""></span>
                            {{ $item->sqft }} Sqft
                        </div>
                    </div>
                    <!-- Additional dynamic content here -->
                    <div class="service-facility">
                        <!-- Dynamic content for amenities -->
                        <div class="mt-3  d-flex  justify-content-center">
                          <a href="{{ route('vacation.detail' ,$item->slug ) }} " class="btn btn-primary px-3 search-btn">
                                        Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="pagination-div mt-5 h5"> 
    {!! $properties->withQueryString()->links('pagination::bootstrap-5') !!}
</div>
