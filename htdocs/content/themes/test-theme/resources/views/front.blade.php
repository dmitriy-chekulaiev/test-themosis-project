@extends('layout.npc', [
    'heading' => $page->post_title,
    'entity_type' => 'HOME_PAGE'
])

@section('main')
    <div class="homepage__template homepage">
        <div class="homepage__hero hero-section">
            <div class="hero__slider slider">

                <div class="slider__slide slide"
                           style="background: url('https://wikiway.com/upload/iblock/cd9/1_gavan-dubaya.jpg') no-repeat center top; background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <div class="slide__content">
                                <div class="slide__title">
                                    <p>
                                        <mark>Test Slide</mark>
                                    </p>
                                </div>

                                <div class="slide__sign-up-now">
                                    <button data-toggle="modal" data-target="#login-modal"
                                            class="get_started open_login_modal">Sing up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider__slide slide"
                     style="background: url('https://www.burgessyachts.com/media/adminforms/locations/n/e/new_york_1.jpg') no-repeat center top; background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <div class="slide__content">
                                <div class="slide__title">
                                    <p>
                                        <mark>Test Slide 2</mark>
                                    </p>
                                </div>

                                <div class="slide__sign-up-now">
                                    <button data-toggle="modal" data-target="#login-modal"
                                            class="get_started open_login_modal">Sing up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @if ($featuredTrials)
            <div class="homepage__trials">
                <div class="homepage__container container">
                    <div class="homepage__row banner__row row">
                        <h2>Featured Trials</h2>
                    </div>
                    <div class="homepage__row banner__row row trials">
                        @foreach($featuredTrials as $trial)
                            <div class="trials__item trial">
                                <div class="trial__content">
                                    <div class="trial__head">
                                        <div class="trial__study-types">
                                            @php $currentlyEnrolling = get_field('currently_enrolling',$trial['ID']);  @endphp
                                            @if ($currentlyEnrolling)
                                                <div class="trial__study-type" style="background-color: #5ac104">
                                                    {{ $currentlyEnrolling }}
                                                </div>
                                            @endif
                                            @php $studyType = get_field('study_type',$trial['ID']);  @endphp
                                            @if ($studyType)
                                                <div class="trial__study-type" style="background-color: #00bdd1">
                                                    {{$studyType}}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="trial__title">
                                        <h6>
                                            <a href="{{get_permalink($trial['ID'])}}">{{get_field('marketing_title',$trial['ID'])}}</a>
                                        </h6>
                                    </div>
                                    <div class="trial__description">
                                        <p>{{get_field('the_trial_is_for_people',$trial['ID'])}} </p>
                                    </div>
                                    <div class="trial__location">
                                        <span>{{$trial['count']}} Locations</span>
                                    </div>
                                    <div class="trial__link green_button">
                                        <a href="{{get_permalink($trial['ID'])}}">Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="trials__more">
                            <a href="#">See more trials</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection