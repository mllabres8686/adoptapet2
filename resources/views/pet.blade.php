@extends('layouts.app')

@section('content')
    {{--
    Necesita:
    los datos de la mascota = $pet
    el nombre e id del dueño = $master
    */
    --}}

    {{--ACTUALIZAR DATOS DE MASCOTA--}}
    @if(isset($edit))
        {{--editar datos--}}
        @component(
            'components.pet_profile_data_edit',
            ['edit'=>true,'pet'=>$pet, 'master'=>$master])
        @endcomponent
        {{--modal de crop--}}
        {{--
        @component(
            'components.modals.crop_modal')
        @endcomponent
        --}}

        {{--modal confirmar borrar mascota--}}
        {{--
        @component(
            'components.modals.pet_modal',
            ['pet'=>$pet])
        @endcomponent
        --}}
    {{-- PARA CREAR NUEVA MASCOTA--}}
    @elseif(isset($create))

        {{--crear datos--}}
        @component(
            'components.pet_profile_data_create',
            ['edit'=>true,'pet'=>$pet, 'master'=>$master])
        @endcomponent

        {{--modal de crop--}}
        {{--
        @component(
            'components.modals.crop_modal',
            ['pet'=>$pet])
        @endcomponent
        --}}

    {{--VSUALIZAR DATOS DE MASCOTA--}}
    @else
        {{--visualizar datos--}}
        @component(
            'components.pet_profile_data',
            ['pet'=>$pet, 'master'=>$master])
        @endcomponent
    @endif

    {{--galeria de fotos de la mascota--}}
    @if(isset($edit))
        {{--editar--}}
        @component(
            'components.pet_profile_gallery',
            ['edit'=>true,'pet'=>$pet])
        @endcomponent

    @else
        {{--visualizar--}}
        @component(
           'components.pet_profile_gallery',
           ['pet'=>$pet])
        @endcomponent
    @endif

    {{--footer--}}
    @component('components.footer')
    @endcomponent



@endsection
