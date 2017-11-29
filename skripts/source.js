// reisinger test Funktion

function myExampleFunction() {
    // get specific element
    var x = document.getElementById("btn1").name;
    // write into webpage
    document.getElementById("demo").innerHTML = x;
}

// 
// Patienten anlegen

document.getElementById("save-p").onclick = patientenSpeichern();

function patientenSpeichern() {
    // Get values
    var vorname = document.getElementById("vorname").value;
    var nachname = document.getElementById("nachname").value;
    var geburtsdatum = document.getElementById("geburtsdatum").value;
    var emailadr = document.getElementById("email").value;
    document.getElementById("demo").innerHTML = x;

    // Check for empty variables/inputs
    if ((vorname == "")
        || (nachname == "")
        || (geburtsdatum == "tt.mm.jjjj")
        || (emailadr == "")) {

        var warningFalseInput =
            "<br>Füllen Sie alle Angaben aus<br>"
        document.getElementById("demo").innerHTML = warningFalseInput;
    }

}
