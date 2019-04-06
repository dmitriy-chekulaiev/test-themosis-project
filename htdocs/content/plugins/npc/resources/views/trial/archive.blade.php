@extends('layout.npc', [
    'entity_type' => 'ARCHIVE_trial',
])

@section('main')
    <div class="trials_research__posts-result posts-result">
        <div class="trials_container container">
            <div class="trials_row  row">
                <h2>Find a Clinical Trial</h2>
            </div>
            <div class="trials_result_row row">
                <div class="posts-result__sidebar">
                    <div class="trials__sidebar">
                        <div class="trials__sidebar__title">
                            <h4>Trials</h4>
                        </div>
                        <div class="trials__sidebar__filters">
                            <ul>
                                <li class="search-by-distance">Search by zip code</li>
                                <li class="search-by-distance">
                                    <input value="19335" type="number" class="input-zipcode"
                                           placeholder="Your zip code">
                                    <button data-filter="zipcode" class="filter-trials search-by-distance">GO
                                    </button>
                                </li>
                                <li>Trial Status
                                    <ul>
                                        <li>
                                            <button style="background-color: #d100cd" data-filter="status"
                                                    data-status="1" class="filter-trials search-by-status">Not Yet
                                                Enrolling
                                            </button>
                                        </li>
                                        <li>
                                            <button style="background-color: #5ac104" data-filter="status"
                                                    data-status="3" class="filter-trials search-by-status">Currently
                                                Enrolling
                                            </button>
                                        </li>
                                        <li>
                                            <button style="background-color: #cc0000" data-filter="status"
                                                    data-status="9" class="filter-trials search-by-status">Enrollment
                                                Closed
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Type of Trial
                                    <ul>
                                        <li>
                                            <button style="background-color: #00bdd1;" data-filter="type" data-type="1"
                                                    class="filter-trials search-by-type">Interventional
                                            </button>
                                        </li>
                                        <li>
                                            <button style="background-color: #001cd3" data-filter="type" data-type="2"
                                                    class="filter-trials search-by-type">Observational
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <li>Sort by Trial name
                                    <ul>
                                        <li>
                                            <button data-filter="name" data-order="asc"
                                                    class="filter-trials search-by-name">A-Z
                                            </button>
                                        </li>
                                        <li>
                                            <button data-filter="name" data-order="desc"
                                                    class="filter-trials search-by-name">Z-A
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="dot"></div>
                                    <button data-filter="my-trials" class="filter-trials my-trials">Show My Matching
                                        Trials
                                    </button>
                                    <button data-filter="clear" class="filter-trials clear">Clear filter</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="posts-result__posts trials_posts">
                    <div class="not-have-trials" style="display: none;">
                        <h3>Sorry, that criteria does not currently fit any trials.</h3>
                    </div>
                    <div class="trials_posts trials">
                        @if ($trialArchive)
                            @foreach($trialArchive as $trial)
                                <div class="trials__item trial">
                                    <div class="trial__content">
                                        <div class="trial__head">
                                            <div class="trial__study-types">
                                                <div class="trial__icon">Trials</div>
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
                                            <div>
                                                @if($trial['count'])
                                                    <div class="trial__location">
                                                        <span class="user-guest">{{ $trial['count'] }} Locations</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="trial__title">
                                            <h6>
                                                <a href="{{get_permalink($trial['ID'])}}">{{get_field('marketing_title',$trial['ID'])}}</a>
                                            </h6>
                                        </div>
                                        <div class="trial__excerpt">
                                            <p>{{get_field('the_trial_is_for_people',$trial['ID'])}}</p></div>
                                        <div class="trial__buttons">
                                            <a href="{{get_permalink($trial['ID'])}}">Learn More</a>
                                            <button data-toggle="modal" data-target="#login-modal"
                                                    data-trial="{{$trial['ID']}}">AM I A FIT?
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection