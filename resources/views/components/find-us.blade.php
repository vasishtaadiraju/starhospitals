{{-- <div class="find-us">
    <div class="find-us__locations">
        <h2 class="find-us__locations__title">Find Us</h2>
        <div class="find-us__locations__card">
            <h3>Banjara hills</h3>
            <p>8-2-596/5, Road No. 10,
                Gaffar Khan Colony, Banjara Hills,
                Hyderabad, Telangana
                500034</p>
                <button>Find Directions</button>
        </div>
        <div class="find-us__locations__card">
            <h3>Banjara hills</h3>
            <p>8-2-596/5, Road No. 10,
                Gaffar Khan Colony, Banjara Hills,
                Hyderabad, Telangana
                500034</p>
                <button>Find Directions</button>
        </div>
    </div>
    <div class="find-us__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.9179884052514!2d78.44295717483072!3d17.415722983476275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb96b370994307%3A0x6211411519d85a52!2sStar%20Hospitals%20-%20Banjara%20Hills!5e0!3m2!1sen!2sin!4v1684830198694!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div> --}}

<div class="find-us">
    <div class="find-us__locations">
        <h2 class="find-us__locations__title section-heading">Find Us</h2>
        @foreach($branches as $branch)
        <div class="find-us__locations__card">
            <a href="{{route('branch',$branch->slug)}}">    <h3>{{ $branch->name }}</h3> </a>
            <p>{{ $branch->address }}</p>
                <button class="find-direction">Find Directions</button>
        </div>
        @endforeach

        {{--  <div class="find-us__locations__card">
            <h3>Banjara hills</h3>
            <p>8-2-596/5, Road No. 10,
                Gaffar Khan Colony, Banjara Hills,
                Hyderabad, Telangana
                500034</p>
                <button>Find Directions</button>
        </div>  --}}
    </div>
    <div class="find-us__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.9179884052514!2d78.44295717483072!3d17.415722983476275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb96b370994307%3A0x6211411519d85a52!2sStar%20Hospitals%20-%20Banjara%20Hills!5e0!3m2!1sen!2sin!4v1684830198694!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
