@extends('layout.npc', [
    'heading' => __('Try again', NPC_TD),
    'entity_type' => 'NOT_FOUND'
])

@section('main')
    <div class="row">
        <div class="col-xs-12">
            @include('layout.parts.404', [
                'entity_type' => __('page', NPC_TD)
            ])
        </div>
    </div>
@endsection