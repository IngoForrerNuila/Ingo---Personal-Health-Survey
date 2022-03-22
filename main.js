//checkboxes validation//
function validateCheckboxes() {
    let array = [];
    let checkboxes = document.querySelectorAll('input[type=checkbox]:checked');

    for (let i = 0; i < checkboxes.length; i++) {
        array.push(checkboxes[i].value);

    }

    if (checkboxes.length === 0) {
        setWarning("Please select a box");
        return false;
    }

    document.getElementById("checkboxValues").value = array.toString();
    return false;
}



function validateQuestionMinimal() {
    // Die 'id' des input elements muss hier exakt eingetragen werden.
    // Damit ist diese Funktion nur in bestimmten Fällen wieder verwendbar.
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Please fill with your Value");
        return false;
    }
}



//for validating sliders//

function validateQuestion(inputID, radioName) {
    // MUSS FÜR VERSCHIEDENE TYPEN VON INPUT FELDERN FUNKTIONIEREN.
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Please change the position of the Slider.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Please choose, before moving on.");
            return false;
        }
    }
    else {
        // Prüfe den 'generellen' Fall für Text-, Zahlenfelder etc.
        let value = inputElement.value;

        // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
        if (!value) {
            // Früher mit alert("Bla bla ...");
            setWarning("Please fill with your Value.");
            return false;
        }
    }
}


//validating numbers //
function validateNumber() {
    let value = document.getElementById("number-text").value;


    if (value == "") {
        setWarning("There is no answer selected");

    }

    return false;

}



//for validating radio Buttons//
function validateRadio(radioName) {
    let radioButtons = document.getElementsByName(radioName);


    for (let i = 0; i < radioButtons.length; i++) {
            let radioBtn = radioButtons[i];

        if (radioBtn.checked == true) {
            return true;

        }
    }

    setWarning("KBROOON");
    return false;
}




//RANGE SLIDERS
function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";

}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}




//WARNIMNG
function setWarning(text) {

    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;

}

