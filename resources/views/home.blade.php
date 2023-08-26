@extends('layouts.app')

@section('content')

    @component(
        'components.carrousel',
        ['banners' => $banners])
    @endcomponent

    @component(
        'components.main_content',
        ['pets'=>$pets])
    @endcomponent

    @component(
        'components.pagination',
        ['pet_length' => $pet_length])
    @endcomponent

    @component(
        'components.footer')
    @endcomponent

@endsection
