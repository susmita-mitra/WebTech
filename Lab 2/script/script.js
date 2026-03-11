console.log("connect");
var count=0;
function collectData(){
    const email=document.getElementById("email").value;
    const password=document.getElementById("password").value;
    console.log("Collect Data from form");
    console.log(email);
    console.log(password);

if(!email.includes("@")){
    document.getElementById("emailerror").innerHTML="@ is required";
    count++;
    document.getElementById("count"+count).innerHTML="Wrong submit";
}

else{
    document.getElementById("emailerror").innerHTML="";
}

if (!password){
    document.getElementById("passworderror").innerHTML="Email is required";
    count++;
    alert("Error in submit:"+count);
}
else{
    document.getElementById("passworderror").innerHTML="";
}
return false;
}