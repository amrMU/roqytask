    <!-- start FB -->
    <meta property="fb:app_id"             content="2642923069053688" />
    <meta property="og:url"                content="{{URL::to('/')}}" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="{{@$setting->title_en}}" />
    <meta property="og:description"        content="{{@$setting->content_en}}" /> 
    <meta name=”description” content="{{@$setting->content_en}}"/>

    <meta property="og:image"              content="{{URL::to($setting->logo)}}" />
    {{-- <meta property="og:image:width" content="674" /> --}}
    {{-- <meta property="og:image:height" content="424" /> --}}
    <meta name="keywords"              content="
    {{@$setting->meta_tags}} @foreach($expertises as $expertise) {{@$expertise->meta_tags}} @endforeach" />
    <meta name="robots" content="index, follow">

     @if(LaravelLocalization::getCurrentLocale() == 'ar')
     <meta http-equiv="content-language" content="ar" />
     @else 
        <meta http-equiv="content-language" content="en" />
     @endif




    <!-- End FB -->

    <!-- start Twitter -->
    <!-- End Twitter -->
