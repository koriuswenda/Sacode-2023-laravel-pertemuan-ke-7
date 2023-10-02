  <!-- nav START -->
  <nav class="py-5 bg-secondary">
 
    <div class="container">
        <div class="col-12">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item @if (request::segment ('1') == '' ) active @else  @endif "> 
                    <a href="{{ url('/') }}" class="fs-4 text decoration-none px-4 @if (request::segment ('1') == '' ) link-light@else  @endif">Home</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('profile') }}" class="fs-4 text decoration-none px-4> @if (request::segment ('1') == '' ) active @else  @endif "> Profile</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('gallery') }}" class="fs-4 text decoration-none px-4> @if (request::segment ('1') == '' ) active @else  @endif "> Gallery</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ url('contact') }}" class="fs-4 text decoration-none px-4> @if (request::segment ('1') == '' ) active @else  @endif "> Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- nav END -->