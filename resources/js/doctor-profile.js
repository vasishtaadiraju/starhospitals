import './utils/event-handler';
import "./app";
import { httpRequest, removeClass, showForm, throttle } from './utils/event-handler';
import './consultations/physical'
import { handleDateClick } from './consultations/physical';
domSelector('.d-p-achievement__tab','click',function(){
    const activeStatus = this.nextElementSibling.classList.contains('d-p-achievement__details--active');
    removeClass('d-p-achievement__details','d-p-achievement__details--active')
    removeClass('d-p-achievement__tab','d-p-achievement__tab--active')
    if(activeStatus == false){
        this.nextElementSibling.classList.toggle('d-p-achievement__details--active')
        this.classList.add('d-p-achievement__tab--active');
}
    


    
})


domSelector('.d-p-info__col-3__scroll-tabs__item a','click',function(e){
    e.preventDefault()
    let element = document.querySelector(this.getAttribute('href'));
    let tabClass = this.getAttribute('data-tab');
    const activeStatus = element.classList.contains('d-p-achievement__details--active');
    removeClass('d-p-info__col-3__scroll-tabs__item','d-p-info__col-3__scroll-tabs__item--active')
    removeClass('d-p-achievement__tab','d-p-achievement__tab--active')

    this.parentNode.classList.add('d-p-info__col-3__scroll-tabs__item--active');
    removeClass('d-p-achievement__details','d-p-achievement__details--active')
    if(activeStatus == false)
    {
        element.classList.toggle('d-p-achievement__details--active')
        console.log(element.previousElementSibling);
        element.previousElementSibling.classList.add('d-p-achievement__tab--active');
    }
    

    element.scrollIntoView(false);
})   


domSelector('#change-location-box','change',function(e){
   
    window.location.href = e.target.options[e.target.selectedIndex].getAttribute('data-url');
})

domSelector(".doctor-physical-btn", "click", showForm);

$(async ()=>{
    
    $('.d-p-info__branches span').on('click',function(){
        $('.d-p-info__branches span').removeClass('d-p-info__branches--active');
        $(this).addClass('d-p-info__branches--active');
        $('.calender__week--active').click();
    })

    async function printCalendar(){
        
        let date = $('#calendar-startDate').val();
        let calendar = await httpRequest(
            "/api/calendar/"+date,
            "GET",
            
        );
        $('#calendar').html("");
        let datesHTML = `
        <div class="calender__nav">
                    <div class="calender__month-year">
                        <span>${calendar.data.month}</span> <span>${calendar.data.year}</span>
                    </div>
                    <div class="calender__btn">
                        
                        <span class="calender__btn--previous">
                            ❮
                        </span>
                        <span class="calender__btn--next">❯</span>
                    </div>
                </div>
                <div class="calender__week">
                  ${
                    calendar.data.week.map(name=>{
                        return `<span>${name}</span>`
                    }).join('')
                  }  


                </div>  
        <div class="calender__week">
                 
                 ${
                    calendar.data.days.map(date=>{
                        if(calendar.data.month == date.fullMonth){
                            return `<span data-date="${date.date}" data-month="${date.fullMonth}" class="${date.inactive ? 'calender__week--inactive' : 'physical-consultation__date'} ${date.today ? 'calender__week--active' : ''}">${date.day}</span>`;

                        }
                        else
                        {
                            return `<span></span>`
                        }
                    }).join('')
                 }      
        
      

</div>`

$('#calendar').append(datesHTML);


                 $('.calender__btn--next').on('click',function(){
                    let date = $('#calendar-startDate').val();
                    let nextMonth = new Date(date);
                 nextMonth.setMonth(nextMonth.getMonth() + 1, 1);
                 nextMonth = new Date(nextMonth);
                 nextMonth = nextMonth.toISOString().split('T')[0];
                 $('#calendar-startDate').val(nextMonth);
                 printCalendar()
  
                 })
                 $('.calender__btn--previous').on('click',function(){
                    let date = $('#calendar-startDate').val();
                    let nextMonth = new Date(date);
                 nextMonth.setMonth(nextMonth.getMonth() - 1, 1);
                 nextMonth = new Date(nextMonth);
                 nextMonth = nextMonth.toISOString().split('T')[0];
                 $('#calendar-startDate').val(nextMonth);
                 printCalendar()
                
                 })

                 domSelector(
                    ".physical-consultation__date",
                    "click",
                    throttle(handleDateClick, 1500)
                );
                 
    }
    await printCalendar();
    console.log('workin');
    $('.calender__week--active').trigger('click');
})
