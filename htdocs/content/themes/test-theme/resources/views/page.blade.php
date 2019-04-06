@extends('layout.npc', [
    'heading' => $page->post_title,
    'entity_type' => 'PAGE'
])

@section('main')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                {!! $page->post_content !!}
            </div>
        </div>
    </div>
@endsection