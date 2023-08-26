@extends('layouts.app')

@section('content')
    {{--
    Necesita:
    los datos de la persona = $person
    los datos de las mascotas = $pets
    --}}

    @if(isset($person))

        {{--datos de la PERSONA--}}
        {{--editar datos personales--}}
        @if(isset($edit))
            @component(
                'components.person_profile_data_edit',
                ['person'=>$person])
            @endcomponent

            {{--modal de crop--}}
            {{--
            @component(
                'components.modals.crop_modal',
                ['person'=>$person,'pets'=>$pets])
            @endcomponent
            --}}

        @else
                {{--visualizar datos personales--}}
            @component(
               'components.person_profile_data',
               ['person'=>$person])
            @endcomponent
        @endif

        {{--MASCOTAS de la PERSONA--}}
        @if(isset($edit))
            {{--editar mascotas asociadas--}}
            @component(
               'components.person_profile_gallery',
               ['edit'=>true,'pets'=>$pets,'person_name'=>$person->name])
            @endcomponent
        @else
            {{--visualizar mascotas asociadas--}}
            @component(
               'components.person_profile_gallery',
               ['pets'=>$pets,'person_name'=>$person->name])
            @endcomponent
        @endif


    @else
        [ERRROR: No hay person] la tabla no continene ninguna entrada con este ID
    @endif

    {{--footer--}}
    @component(
        'components.footer')
    @endcomponent




@endsection

