<div class="filter">
    <div class="filter__fields-wrapper" style="position: relative">

        <svg width="19" height="22" viewBox="0 0 19 22" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 13V15C4.68629 15 2 17.6863 2 21H0C0 16.5817 3.58172 13 8 13ZM8 12C4.685 12 2 9.315 2 6C2 2.685 4.685 0 8 0C11.315 0 14 2.685 14 6C14 9.315 11.315 12 8 12ZM8 10C10.21 10 12 8.21 12 6C12 3.79 10.21 2 8 2C5.79 2 4 3.79 4 6C4 8.21 5.79 10 8 10ZM17.4462 19.032L18.9497 20.5355L17.5355 21.9497L16.032 20.4462C15.4365 20.7981 14.7418 21 14 21C11.7909 21 10 19.2091 10 17C10 14.7909 11.7909 13 14 13C16.2091 13 18 14.7909 18 17C18 17.7418 17.7981 18.4365 17.4462 19.032ZM14 19C15.1046 19 16 18.1046 16 17C16 15.8954 15.1046 15 14 15C12.8954 15 12 15.8954 12 17C12 18.1046 12.8954 19 14 19Z" fill="black"/>
            </svg>
            

        <input type="text" class="auto-complete-input" placeholder="Search Doctor">
        <div class="auto-complete">
            <ul class="auto-complete__list">

            </ul>
        </div>
    </div>
    <div class="filter__fields-wrapper">

        <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.80758 18.8995L14.7245 13.9497C17.4401 11.2161 17.4401 6.78392 14.7245 4.05025C12.009 1.31658 7.60618 1.31658 4.89061 4.05025C2.17505 6.78392 2.17505 11.2161 4.89061 13.9497L9.80758 18.8995ZM9.80758 21.7279L3.48577 15.364C-0.00567347 11.8492 -0.00567347 6.15076 3.48577 2.63604C6.97721 -0.87868 12.6379 -0.87868 16.1294 2.63604C19.6209 6.15076 19.6209 11.8492 16.1294 15.364L9.80758 21.7279ZM9.80758 11C10.9049 11 11.7943 10.1046 11.7943 9C11.7943 7.89543 10.9049 7 9.80758 7C8.7103 7 7.82083 7.89543 7.82083 9C7.82083 10.1046 8.7103 11 9.80758 11ZM9.80758 13C7.61307 13 5.83407 11.2091 5.83407 9C5.83407 6.79086 7.61307 5 9.80758 5C12.0021 5 13.7811 6.79086 13.7811 9C13.7811 11.2091 12.0021 13 9.80758 13Z" fill="black"/>
            </svg>
            

        <select type="text" class="location-select-box" id="location-select-box" data-type="location" placeholder="Enter Doctor Name">
            {{-- <option value="">Filter by Location</option> --}}

            @foreach ($branches as $item)
            <option value="{{$item->id}}" @if (session('branch_id') == $item->id)
                selected
            @elseif($item->id == 1) selected @endif>{{$item->name}}</option>
                
            @endforeach
        </select>
    </div>
    <div class="filter__fields-wrapper">
        
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.4375 0V2H2.48438V6C2.48438 8.2091 4.23326 10 6.39062 10C8.54795 10 10.2969 8.2091 10.2969 6V2H8.34375V0H11.2734C11.8128 0 12.25 0.44772 12.25 1V6C12.25 8.9727 10.1388 11.4405 7.36797 11.9169L7.36719 13.5C7.36719 15.433 8.89746 17 10.7852 17C12.2474 17 13.4951 16.0598 13.9833 14.7375C12.9612 14.27 12.25 13.2201 12.25 12C12.25 10.3431 13.5616 9 15.1797 9C16.7978 9 18.1094 10.3431 18.1094 12C18.1094 13.3711 17.2111 14.5274 15.9844 14.8854C15.385 17.252 13.2844 19 10.7852 19C7.81875 19 5.41406 16.5376 5.41406 13.5L5.41425 11.9171C2.64295 11.4411 0.53125 8.9731 0.53125 6V1C0.53125 0.44772 0.968477 0 1.50781 0H4.4375ZM15.1797 11C14.6403 11 14.2031 11.4477 14.2031 12C14.2031 12.5523 14.6403 13 15.1797 13C15.719 13 16.1562 12.5523 16.1562 12C16.1562 11.4477 15.719 11 15.1797 11Z" fill="black"/>
            </svg>
            
        
        <select type="text" class="coe-select-box" data-selected-id="{{session('coe_id')}}" id="coe-select-box" data-type="coe" placeholder="Enter Doctor Name"> 
            <option value="">Center of Excellence</option>
            {{-- @foreach ($coes as $item)
            <option value="{{$item->id}}" @if (session('coe_id') == $item->id || $item->id  == 8)
                selected
            @endif>{{$item->name}}</option>
                
            @endforeach --}}
        </select>
    </div>
    
    <div class="filter__fields-wrapper">

        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 0C12.0675 0 15.426 3.03562 15.9337 6.96494L18.1842 10.5037C18.3324 10.7367 18.3025 11.0847 17.9593 11.2317L16 12.071V15C16 16.1046 15.1046 17 14 17H12.001L12 20H3L3.00025 16.3061C3.00033 15.1252 2.56351 14.0087 1.7555 13.0011C0.65707 11.6313 0 9.8924 0 8C0 3.58172 3.58172 0 8 0ZM8 2C4.68629 2 2 4.68629 2 8C2 9.3849 2.46818 10.6929 3.31578 11.7499C4.40965 13.114 5.00036 14.6672 5.00025 16.3063L5.00013 18H10.0007L10.0017 15H14V10.7519L15.5497 10.0881L14.0072 7.66262L13.9501 7.22118C13.5665 4.25141 11.0243 2 8 2ZM8 5C8.5523 5 9 5.44772 9 6V7H10C10.5523 7 11 7.44772 11 8C11 8.5523 10.5523 9 10 9H9V10C9 10.5523 8.5523 11 8 11C7.4477 11 7 10.5523 7 10V8.999L6 9C5.44772 9 5 8.5523 5 8C5 7.44772 5.44772 7 6 7L7 6.999V6C7 5.44772 7.4477 5 8 5Z" fill="black"/>
            </svg>
            

        <select type="text" class="speciality-select-box" data-selected-id="{{session('speciality_id')}}" id="speciality-select-box" data-type="speciality"  placeholder="Enter Doctor Name">
            <option value="">Filter by Speciality</option>
            
        </select>
    </div>
</div>
