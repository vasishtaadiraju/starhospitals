<x-heading :title="'Frequently Asked Questions'" :description="'Lorem ipsum dolor sit amet consectetur. Pharetra hac gravida vestibulum donec accumsan morbi. In aliquam turpis pellentesque ultricies imperdiet accumsan sociis.'" />
{{-- <x-gap/> --}}
<div class="faqs">
    <ul class="faqs__list-wrapper">
        @foreach ($faqs as $item)
        <div class="faqs__card">
            <li class="faqs__card__questions">{{$item->question}}</li>

            {{-- faqs__card__answer--active --}}
            <div class="faqs__card__answer ">
                
                    {!!$item->answer!!}

                
            </div>
        </div>   
        @endforeach
        
        {{-- <div class="faqs__card">
            <li class="faqs__card__questions">What kind of medical services does Star Hospitals offer? </li>
            <div class="faqs__card__answer">
                
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis esse ullam ut beatae saepe dicta! Est debitis nemo, ea voluptatibus harum quidem suscipit ratione temporibus veniam dolorum deserunt minus repellendus?Nostrum at porro sint quod, labore quibusdam deserunt obcaecati ipsam itaque maiores aliquid quis repellendus minima, ratione dolore veritatis, qui rerum ex autem odio? Ea omnis laboriosam iusto ab excepturi.

                
            </div>
        </div>
        <div class="faqs__card">
            <li class="faqs__card__questions">What kind of medical services does Star Hospitals offer? </li>
            <div class="faqs__card__answer">
                
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis esse ullam ut beatae saepe dicta! Est debitis nemo, ea voluptatibus harum quidem suscipit ratione temporibus veniam dolorum deserunt minus repellendus?Nostrum at porro sint quod, labore quibusdam deserunt obcaecati ipsam itaque maiores aliquid quis repellendus minima, ratione dolore veritatis, qui rerum ex autem odio? Ea omnis laboriosam iusto ab excepturi.

                
            </div>
        </div>

        <div class="faqs__card">
            <li class="faqs__card__questions">What kind of medical services does Star Hospitals offer? </li>
            <div class="faqs__card__answer">
                
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis esse ullam ut beatae saepe dicta! Est debitis nemo, ea voluptatibus harum quidem suscipit ratione temporibus veniam dolorum deserunt minus repellendus?Nostrum at porro sint quod, labore quibusdam deserunt obcaecati ipsam itaque maiores aliquid quis repellendus minima, ratione dolore veritatis, qui rerum ex autem odio? Ea omnis laboriosam iusto ab excepturi.

                
            </div>
        </div> --}}
    </ul>
</div>