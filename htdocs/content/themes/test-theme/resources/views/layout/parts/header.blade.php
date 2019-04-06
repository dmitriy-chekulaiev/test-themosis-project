<header class="header">
    <div class="header__container">
        <div class="header__row"><a class="header__brand brand" href="{{esc_url(home_url('/'))}}"> <img
                        class="brand__img"
                        src="https://wp-dev.space/2120_creative/nephcure-kidney-international/newdesign/wp-content/uploads/2018/09/NephCure-logo-large.png"
                        alt="Kidney Health Gateway"> </a>
            <div class="header__nav">
                @if (has_nav_menu('primary'))
                    @php
                        wp_nav_menu(['theme_location' => 'primary']);
                    @endphp
                @endif
            </div>
            <div class="header__login-button login-button">
                <button data-toggle="modal" data-target="#update-modal"
                        class="get_started open_login_modal  update-answers">Update My Answers
                </button>
                <button data-toggle="modal" data-target="#start-over"
                        class="get_started open_login_modal  update-answers">Start Over
                </button>
                <button class="open-mobile-menu"><span></span> <span></span> <span></span></button>
            </div>
        </div>
    </div>
</header>