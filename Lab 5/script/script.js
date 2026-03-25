console.log("Connected");
function analyzeText() {
    const text = document.getElementById("textInput").value;
    const errorMsg = document.getElementById("errorMsg");
 
    if (text.trim() == "") {
        errorMsg.innerHTML = "Please enter text!";
        return;
    }
 
    errorMsg.innerHTML = "";
 
    let characters = text.length;

    let words = text.trim().split(/\s+/).length;

    let reversed = text.split("").reverse().join("");

    document.getElementById("charCount").innerHTML = characters;
    document.getElementById("wordCount").innerHTML = words;
    document.getElementById("reversedText").innerHTML = reversed;
}