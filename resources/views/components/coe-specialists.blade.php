<div class="ui-background coe-page" id="find-doctors" data-page-type="coe" data-coe-id="{{$content->id}}">
    <x-heading :title="'Meet Our Specialists, Banjara Hills'" :description="$content->meet_our_specialist_text" />
    {{-- <x-filter :$content :branches=[] :coes=[] /> --}}
    <div style="height:1em"></div>
    <div class="doctors doctors--primary  banjara-hills-slider" >
            
    </div>
    <x-gap/>
    {{-- <x-gap/> --}}
    
    
    <x-heading :title="'Meet Our Specialists, Financial District'" :description="$content->meet_our_specialist_text" />
        {{-- <x-filter :$content :branches=[] :coes=[] /> --}}
        <div style="height:1em"></div>
        <div class="doctors doctors--primary specialists-slider financial-slider" >
        
        </div>
       {{-- <button class="view-all-btn">
        View All
    </button> --}}
</div>
