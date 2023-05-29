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
  console.log(result.data);


    
        result.data.forEach(element => {
            
            let list = `<li class="auto-complete__list__item" data-id="${element.id}">${element.name}</li>`
            this.nextElementSibling.childNodes[1].insertAdjacentHTML("beforeend", list);

        })
        domSelector('.auto-complete__list__item','click',handleClick)

}


function handleClick()
{
    this.parentNode.parentNode.previousElementSibling.value = this.innerHTML;
    document.getElementsByClassName("auto-complete__list")[0].innerHTML = "";
    let id  = this.getAttribute('data-id');
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

