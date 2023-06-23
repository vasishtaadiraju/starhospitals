{{-- <h1 class="section-heading key-services">Our Key Services</h1> --}}
<x-heading :title="'Our Key Services'" :description="''" />
<div class="key-services">


    <div class="key-services__wrapper @if (request()->route()->getName() == 'speciality')
        key-services__wrapper--speciality
        @else
        key-services-slider
    @endif" id="key-services">
        @if(count($coes) > 0 || $coes != null)
        
        @foreach ($coes as $item)
                    @if (count($item->specialities) > 0)
                    
                        @foreach ($item->specialities as $speciality)
                        
                            <div class="key-services__wrapper__card-wrapper">
                                <a href="{{route('speciality',$speciality->slug)}}" class="key-services__card">
                                    {!! $speciality->icon_image !!}
                        
                                    <p>{{ $speciality->name }}</p>
                                </a>
                            </div>
                            
                        @endforeach
                    @else
                    <div class="key-services__wrapper__card-wrapper">

                    <a href="{{route('speciality',$item->slug)}}" class="key-services__card">
                        {!! $item->icon_image !!}
            
                        <p>{{ $item->name }}</p>
                    </a>
                </div>
                    @endif
                @endforeach
        @else

        @foreach ($coes as $item)
                    @if (count($item->specialities) > 0)
                        @foreach ($item->specialities as $speciality)
                            
                            <a href="{{route('speciality',$speciality->slug)}}" class="key-services__card">
                                {!! $speciality->icon_image !!}
                    
                                <p>{{ $speciality->name }}</p>
                            </a>
                        @endforeach
                    @else
                    <a href="{{route('speciality',$item->slug)}}" class="key-services__card">
                        {!! $item->icon_image !!}
            
                        <p>{{ $item->name }}</p>
                    </a>
                    @endif
                @endforeach
        
        
        
            
        @endif
    </div>

</div>



