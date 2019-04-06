@extends('layout.npc', [
    'heading' => __('Authentication required', NPC_TD),
    'entity_type' => 'NOT_FOUND'
])

@section('main')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    @include('layout.parts.401', [
                        'entity_type' => __('page', NPC_TD)
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection