console.log("Connect");

let total = 0;
let virtualCount = 0;
let personCount = 0;

function collectData() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const company = document.getElementById("company").value;

  const virtual = document.getElementById("virtual");
  const person = document.getElementById("person");

  let count = 0;

  console.log("Collected data from form");
  console.log(name);
  console.log(email);
  console.log(company);

  if (!name) {
    document.getElementById("nameerror").innerHTML = "Name is required";
    count++;
  } else if (name.length < 6 || name.length > 100) {
    document.getElementById("nameerror").innerHTML =
      "Name must be between 6 and 100 characters";
    count++;
  } else {
    document.getElementById("nameerror").innerHTML = "";
  }

  if(!email.includes("@") || !email.includes(".")) {
    document.getElementById("emailerror").innerHTML = "Please enter a valid professional email address";
    count++;
  } else {
    document.getElementById("emailerror").innerHTML = "";
  }

  if (company.length > 100) {
    document.getElementById("companyerror").innerHTML =
      "Maximum 100 characters allowed";
    count++;
  } else {
    document.getElementById("companyerror").innerHTML = "";
  }

  if (virtual.checked) {
    console.log("Virtual");
    document.getElementById("attendanceerror").innerHTML = "";
  } else if (person.checked) {
    console.log("In-Person");
    document.getElementById("attendanceerror").innerHTML = "";
  } else {
    document.getElementById("attendanceerror").innerHTML =
      "Please select your attendance type";
    count++;
  }

  console.log("Error Count", count);

  if(count==0){

total++;

if(virtual.checked){
virtualCount++;
}

else if(person.checked){
personCount++;
}

document.getElementById("total").innerHTML = total;
document.getElementById("virtualCount").innerHTML = virtualCount;
document.getElementById("personCount").innerHTML = personCount;

alert("Registration Successful");

}

  return false;
}

function dynamic(){

let panel = document.getElementById("analyticsPanel");
let btn = document.getElementById("analyticsBtn");

if(panel.hidden){
panel.hidden = false;
btn.innerHTML = "Hide Event Analytics";
}

else{
panel.hidden = true;
btn.innerHTML = "Show Event Analytics";
}

}