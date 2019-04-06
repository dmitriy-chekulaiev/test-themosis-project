<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php wp_head(); @endphp
    @include('layout.parts.favicon')
</head>
<body @php body_class('skin-teal sidebar-mini sidebar-collapse'); //TODO: remove in case of security @endphp>
    <div id="preloader-area" style="display: none;">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <div class="wrapper" style="height: auto; min-height: 100%;">



        <div class="content-wrapper padding-top" style="min-height: 1170px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @include('layout.parts.header')
            </section>

            <section class="content">
                @yield('main')
            </section>

            <section class="content-footer">
                @include('layout.parts.footer')
            </section>
        </div>


    </div>
    <?php wp_footer(); ?>
</body>