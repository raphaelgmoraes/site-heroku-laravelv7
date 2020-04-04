<div id="side-nav" class="sidenav">
        <a href="javascript:void(0)" id="side-nav-close">&times;</a>
        
        <div class="sidenav-content">
            <p>
                {{ env('CLIENT_DATA_ADDRESS') }} - {{env('CLIENT_DATA_NUMBER')}} <br>
                {{ env('CLIENT_DATA_COMPLEMENT') }} <br>
                {{ env('CLIENT_DATA_NEIGHBORHOOD') }} <br>
                {{ env('CLIENT_DATA_CITY') }} <br>                
            </p>
            <p>
                <span class="fs-16 primary-color">{{ env('CLIENT_DATA_TELEPHONE') }}</span>
            </p>
            <p>{{ env('CLIENT_DATA_EMAIL') }}</p>
            <p>
                <a href="{{ env('CLIENT_DATA_LINK_GITHUB') }}" style="font-size: 15px;" target="_blank">
                    {{ env('CLIENT_DATA_LINK_GITHUB') }}
                </a>
            </p>
        </div>
    </div>
    <div id="side-search" class="sidenav">
        <a href="javascript:void(0)" id="side-search-close">&times;</a>
        <div class="sidenav-content">
            <form action="">

                <div class="input-group md-form form-sm form-2 pl-0">
                  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="input-group-text red lighten-3" id="basic-text1">
                        <span class="lnr lnr-magnifier"></span>
                    </button>
                  </div>
                </div>

            </form>
        </div>      
    </div>