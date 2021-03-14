/*
 *  David Boone
 *  2/9/2021
 *  This validates the guestbook inputs
 */
window.onload = function ()
{
    let button = document.getElementById("submit");
    button.onclick = validateForm;
}



function validateForm(event)
{
    // these help with validation in each specific input
    let nameErrors=true;
    let emailErrors=true;
    let urlErrors=true;
    let howMetErrors=true;

    //Contact info validation

    //grabbing the input elements and assigning them to variables
    let fName = document.getElementById("fname");
    let error = document.getElementById("fNameError");

    let lName = document.getElementById("lname");
    let lNameError = document.getElementById("lNameError");

    let email = document.getElementById("email");
    let emailError = document.getElementById("emailError");

    let howMet = document.getElementById("meet");
    let metError = document.getElementById("metError");
    let errorOther = document.getElementById("otherError");
    let other = document.getElementById("other");

    let url = document.getElementById("linkedin");
    let urlError = document.getElementById("urlError");

    //if the user checks the mailing list checkbox email is required, need to grab
    //checkbox input
    let checkbox = document.getElementById("mailing");
    let format = document.getElementById("format");

    //make the mailing format be gone if the checkbox isn't checked
    //format.style.display = "none";

    //error messages for first and last name
    if(fName.value.length === 0)
    {
        error.innerText = "First Name is required";
        error.style.display = "block";
        nameErrors = false;
    }
    else
    {
        error.style.display = "none";
        nameErrors = true;
    }

    if(lName.value.length === 0)
    {
        lNameError.innerText = "Last Name is required";
        lNameError.style.display = "block";
        nameErrors = false;
    }
    else
    {
        lNameError.style.display = "none";
        nameErrors = true;
    }

    //email validation if they put one in
    if(email.value.length > 0)
    {
        let rule=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if(!email.value.match(rule))
        {
            emailError.innerText = "Please enter a valid email";
            emailError.style.display = "block";
            emailErrors = false;
        }
        else
        {
            emailError.style.display = "none";
            emailErrors = true;
        }

    }

    if(checkbox.checked)
    {
        let rule=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if(!email.value.match(rule)||email.value.length === 0)
        {
            emailError.innerText = "Please enter a valid email";
            emailError.style.display = "block";
            emailErrors = false;
        }
        else
        {
            emailError.style.display = "none";
            emailErrors = true;
        }
    }
    else if(!checkbox.checked && email.value.length === 0)
    {
        emailError.style.display = "none";
        emailErrors = true;
    }

    if(url.value.length > 0)
    {
        let rule = /^((https?|ftp|smtp):\/\/)?(www.)?[a-z0-9]+\.[a-z]+(\/[a-zA-Z0-9#]+\/?)*$/;
        if(url.value.match(rule))
        {
            urlError.style.display = "none";
            urlErrors = true;
        }
        else
        {
            urlError.innerText = "Please enter a valid url";
            urlError.style.display = "block";
            urlErrors = false;
        }
    }
    else
    {
        urlError.style.display = "none";
        urlErrors = true;
    }
    //how we met validation and making the other element disappear if other isn't selected
    if(howMet.value !== "none" && howMet.value !== "other")
    {
        errorOther.style.display = "none";
        metError.style.display = "none";
        howMetErrors = true;
    }
    else if(howMet.value === "other")
    {
        if(other.value.length === 0)
        {
            errorOther.innerText = "Please enter how we met";
            errorOther.style.display = "block";
            howMetErrors = false;
        }
        else
        {
            howMetErrors = true;
        }
    }
    else
    {
        metError.innerText = "Please select how we met";
        metError.style.display = "block";
        howMetErrors = false;
    }


    //event.preventDefault();
    if(emailErrors&&howMetErrors&&nameErrors&&urlErrors)
    {
        let button = event.target;
        button.submit;
    }
    else
    {
        event.preventDefault();
    }

}