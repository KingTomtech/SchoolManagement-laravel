// control behavior for the user input field transitions
const userInputFields = document.querySelectorAll('input[class*="userInput"]');console.log

const hoverlabel = (field)=>{

    document.querySelector(`label[for="${field.target.id}"]`).classList.add('hover');
}

userInputFields.forEach(field => {

    if(field.value != ""){
        hoverlabel(field)
    }

    field.onfocus = ()=>{

        document.querySelector(`label[for="${field.id}"]`).classList.add('hover');
    }

    field.onblur = ()=>{

        if(field.value === ""){
            document.querySelector(`label[for="${field.id}"]`).classList.remove('hover');
        }
        
    }
        
});