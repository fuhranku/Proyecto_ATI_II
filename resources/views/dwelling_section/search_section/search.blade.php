@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
    <div class="container">
    
        <div class="row">
            
            @include('dwelling_section.search_section.search_bar')
            @include('dwelling_section.search_section.search_result')
            
        </div>

        <script>
            var quickSearch_post_url = "{{ url('/dwelling/quick_search')}}";
            var detailedSearch_post_url = "{{ url('/dwelling/detailed_search')}}";
            var disable_post_url = "{{ url('/dwelling/disable_dwelling')}}";
            var enable_post_url = "{{ url('/dwelling/enable_dwelling')}}";
            var delete_post_url = "{{ url('/dwelling/delete_dwelling')}}";
        </script>


    </div>
@endsection