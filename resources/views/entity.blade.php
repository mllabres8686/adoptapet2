@extends('layouts.app')

@push('head')
        <!-- Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAvUcmTEYVqAaCHj0GTowRsK5pakMZ4cc&libraries=places" async defer></script>
    <script src="{{ asset('js/entity_map_v2.js') }}" async defer></script>
@endpush


@section('content')
    {{--
    Necesita:
    los datos de la entidad = $entity
    los datos de las mascotas = $pets
    --}}
    <span onload="initMap();"></span>
    {{--datos de la entidad--}}
    @if(isset($edit))
        {{--editar--}}
        @component(
            'components.entity_profile_data_edit',
            ['entity'=>$entity])
        @endcomponent
    @else
        {{--visualizar--}}
        @component(
           'components.entity_profile_data',
           ['entity'=>$entity])
        @endcomponent
    @endif

    {{--mascotas de la entidad--}}
    @if(isset($edit))
        {{--editar--}}
        @component(
            'components.entity_profile_gallery',
            ['edit'=>true,'entity'=>$entity,'pets'=>$pets])
        @endcomponent
    @else
        {{--visualizar--}}
        @component(
           'components.entity_profile_gallery',
           ['entity'=>$entity,'pets'=>$pets])
        @endcomponent
    @endif

    @component(
           'components.pagination',
           ['pet_length' => count($pets)])
    @endcomponent

    {{--footer--}}
    @component(
        'components.footer')
    @endcomponent

@endsection

