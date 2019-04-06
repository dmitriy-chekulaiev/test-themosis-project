@php
    /**
     * @var WP_Post|Nepchure\Test\Models\NPCTrial $trial
     */
@endphp

@extends('layout.npc', [
    'entity_type' => 'SINGLE_TRIAL',
])

@section("main")
    <div class="trial__content trials_posts">
        <div class="trial__container container">
            <div class="trial__row row">
                <div class="all_trials"><a
                            href="#">Back to all trials</a>
                </div>

                <div class="trial__banner fit__banner">
                    <div class="fit__banner__title">
                        <h3>You are a fit!</h3>
                    </div>
                    <div class="fit__banner__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur culpa deleniti
                            deserunt dolorem, ducimus eum fugit illo ipsum laboriosam libero necessitatibus obcaecati
                            officia placeat quasi soluta tempora velit? Commodi!</p>
                    </div>
                    <button data-toggle="modal" data-target="#login-modal"
                            class="fit__banner__button get_started open_login_modal">Get started

                    </button>
                </div>
                <div class="trial__single-content trials">
                    <div class="trial__head">
                        <div class="trials__taxonomies">
                            <div class="trial__icon">
                                Trials
                            </div>
                            @if ($trial->currentlyEnrolling)
                                <div class="trial__study-type" style="background-color: #5ac104">
                                    {{ $trial->currentlyEnrolling }}
                                </div>
                            @endif
                            @if ($trial->studyType)
                                <div class="trial__study-type" style="background-color: #00bdd1">
                                    {{$trial->studyType}}
                                </div>
                            @endif
                        </div>
                        <div class="trial__location">
                            @if ($trial->location)
                                <span class="user-guest"
                                      data-address="<?= $trial->location['address']?> "
                                      data-lng="<?= $trial->location['lng']?>"
                                      data-lat="<?= $trial->location['lat']?>">
                                    @if ($trial->displayLocation) <?= $trial->displayLocation?>  @else <?= $trial->location['address']?> @endif</span>
                            @endif
                        </div>
                    </div>
                    <div class="trial__content-map" id="trial-location-on-map">
                        @if ($trial->location)
                            <div class="marker" data-lat="<?= $trial->location['lat']?>" data-lng="<?= $trial->location['lng']?>"></div>
                        @endif
                    </div>
                    <div class="trials__text-items">
                        <div class="trial__content-text">
                            <div class="trials__text-item">
                                @if ($trial->marketingTitle)
                                    <h5>{{$trial->marketingTitle}}</h5>
                                @endif
                                @if ($trial->studyTitle)
                                    <p>{{$trial->studyTitle}}</p>
                                @endif
                            </div>
                            @if ($trial->briefDescription)
                                <div class="trials__text-item">
                                    <h5>Brief Description</h5>
                                    <p>{{$trial->briefDescription}}</p>
                                </div>
                            @endif
                            <div class="row">
                                @if ($trial->trialPeople)
                                    <div class="trials__text-item text-item-50">
                                        <h5>Trial for people with</h5>
                                        <p>{{$trial->trialPeople}}</p>
                                    </div>
                                @endif
                                @if ($trial->studyGoal)
                                    <div class="trials__text-item text-item-50">
                                        <h5>Trial for people with</h5>
                                        <p>{{$trial->studyGoal}}</p>
                                    </div>
                                @endif
                                @if ($trial->involvedPatient)
                                    <div class="trials__text-item text-item-50">
                                        <h5>Trial for people with</h5>
                                        <p>{{$trial->involvedPatient}}</p>
                                    </div>
                                @endif
                                @if ($trial->aboutStudyDrug)
                                    <div class="trials__text-item text-item-50">
                                        <h5>Trial for people with</h5>
                                        <p>{{$trial->aboutStudyDrug}}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="trial__adress-info">

                            @php $theSameTrials = $trial->getTheSameTrials(); @endphp
                            @if ($theSameTrials)
                                <div class="custom_select select_location">
                                    <button>
                                        <span>Select Location</span>
                                        <span></span>
                                    </button>
                                    <div class="select_options">
                                        <ul>
                                            @foreach($theSameTrials as $sameTrial)
                                                @php $location = get_field('location',$sameTrial->ID); @endphp
                                                @if ($location)
                                                    <li class="samegroup-location"
                                                        data-lat="{{$location['lat']}}"
                                                        data-lng="{{$location['lng']}}">
                                                        <a href="{{get_permalink($sameTrial->ID)}}">{{get_field('location_to_display',$sameTrial->ID)}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <ul class="trial__address">
                                @if  ($trial->studyCoordinator)
                                    <li><strong>Study Coordinator</strong>{{$trial->studyCoordinator}}</li>
                                @endif
                                @if  ($trial->studyCoordinatorMail)
                                    <li><strong>Study Coordinator
                                            Email</strong>{{$trial->studyCoordinatorMail}}</li>
                                @endif
                                @if  ($trial->studyCoordinatorPhone)
                                    <li><strong>Study Coordinator
                                            Phone</strong>{{$trial->studyCoordinatorPhone}}</li>
                                @endif
                                @if  ($trial->siteName)
                                    <li><strong>Site Name</strong>{{$trial->siteName}}</li>
                                @endif
                                @if  ($trial->siteAddress)
                                    <li><strong>Site Address</strong>{{$trial->siteAddress}}</li>
                                @endif
                            </ul>
                            <ul class="trial__additional-info">

                                @if  ($trial->sponsor)
                                    <li><strong>Sponsor</strong>{{$trial->sponsor}}</li>
                                @endif
                                @if  ($trial->studyDrug)
                                    <li><strong>Study Drug</strong>{{$trial->studyDrug}}</li>
                                @endif
                                @if  ($trial->estimatedEnrollment)
                                    <li><strong>Estimated enrollment</strong>{{$trial->estimatedEnrollment}}</li>
                                @endif
                                @if  ($trial->estimatedDate)
                                    <li><strong>Estimated end date</strong>{{$trial->estimatedDate}}</li>
                                @endif

                            </ul>

                            <button data-toggle="modal" data-target="#login-modal" class="trial__not-fit"
                                    data-trial="">
                                AM I A FIT?
                            </button>


                            <a href="/contact-site/?site_name=&study_marketing_title=&site_location=<&study_title=&study_email=">
                                <button data-toggle="modal" class="trial__contact" data-trial="">CONTACT THIS SITE</button>
                            </a>
                            <div class="trial__travel-statement">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, autem commodi
                                consequuntur, dicta eos exercitationem ipsam iusto laudantium maxime minima nam nemo non
                                officia optio quidem, quo tempora veniam? Porro.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single__create-account-banner account-banner">
            <div class="single__container container">
                <div class="single__row row">
                    <div class="account-banner__column column__content">
                        <div class="column_content">
                            <div class="account-banner__title">
                                <h6>Title</h6>
                            </div>
                            <div class="account-banner__subtitle">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi doloremque eos
                                    expedita illo, neque, nostrum porro quisquam quod saepe similique sunt tenetur vel
                                    voluptate. Consectetur corporis distinctio porro quia quibusdam?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <a href="#">Already have an account?</a>
            </div>
        </div>
    </div>
@endsection
