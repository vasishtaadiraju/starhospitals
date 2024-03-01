<x-heading :title="'Scope of Services'" :description="''" />

<div class="s-t">
    <div class="s-t__img-wrp" id="treatments-procedures">
        <div class="s-t__img-wrp__img">
            <img src="" data-src="{{ config('variables.asset') . $content->services_treatments_image1 }}" alt="">
        </div>
        <div class="s-t__img-wrp__img s-t__img-wrp__img--m-hide">
            <img src="" data-src="{{ config('variables.asset') . $content->services_treatments_image2 }}" alt="">

        </div>
    </div>
    <div class="s-t__content-wrp" >
        <div ></div>
            <div class="s-t__content-wrp__content">
                {!!$content->services_treatments!!}
            </div>
    </div>
</div>