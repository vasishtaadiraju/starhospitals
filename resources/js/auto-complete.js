import "./utils/event-handler";
import { httpRequest , debounce , removeClass } from "./utils/event-handler";

async function inputHandler(e) {
  console.log(this);

  if(e.keyCode == 13)
  {
    return "";
  }
  document.getElementsByClassName("auto-complete__list")[0].innerHTML = "";
  let result = await httpRequest("/api/getDoctorSuggetion","POST",{'text':this.value});


    
        result.data.forEach(element => {
            let speciality_slug = "";
            if(element.specialities.length == 0)
            {
                speciality_slug = element.coes[0].slug;
            }
            else
            {
                speciality_slug = element.specialities[0].slug;

            }
            let list = `<li class="auto-complete__list__item" data-id="${element.id}" data-slug="/doctors/${element.branches[0].slug}/${speciality_slug}/${element.slug}">${element.name}</li>`
            this.nextElementSibling.childNodes[1].insertAdjacentHTML("beforeend", list);

        })
        domSelector('.auto-complete__list__item','click',handleClick)

}


function handleClick()
{
    this.parentNode.parentNode.previousElementSibling.value = this.innerHTML;
    let id  = this.getAttribute('data-id');
    let slug  = this.getAttribute('data-slug');
    console.log(slug);
    document.getElementsByClassName("auto-complete__list")[0].innerHTML = "";
    

    window.location.href = slug;
    console.log(id);
    

}

// 38 - top,
// 40- bottom
//13 - enter


let selectedOption = -1;

function onKeyPress(e) {
    const suggetionList = document.getElementsByClassName(
        "auto-complete__list__item"
    );
    const inputField = document.getElementsByClassName("auto-complete-input");
    if (
        e.keyCode == 40 &&
        selectedOption >= -1 &&
        selectedOption < suggetionList.length - 1
    ) {
        selectedOption++;
        removeClass(
            "auto-complete__list__item",
            "auto-complete__list__item--active"
        );
        suggetionList[selectedOption].classList.add(
            "auto-complete__list__item--active"
        );
        inputField[0].value = suggetionList[selectedOption].innerHTML;
    }
    if (
        e.keyCode == 38 &&
        selectedOption > 0 &&
        selectedOption <= suggetionList.length - 1
    ) {
        selectedOption--;
        removeClass(
            "auto-complete__list__item",
            "auto-complete__list__item--active"
        );
        suggetionList[selectedOption].classList.add(
            "auto-complete__list__item--active"
        );
        inputField[0].value = suggetionList[selectedOption].innerHTML;
    }

    if (e.keyCode == 13) {
        inputField[0].value = suggetionList[selectedOption].innerHTML; 
        document.getElementsByClassName("auto-complete__list")[0].innerHTML = "";
        selectedOption = -1
    }
}
document.addEventListener("click", function () {
    selectedOption = -1
    document.getElementsByClassName("auto-complete__list")[0].innerHTML = "";

    
});
domSelector(".auto-complete-input", "keypress", debounce(inputHandler,300));
domSelector(".auto-complete-input", "keydown", onKeyPress);

