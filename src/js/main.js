
let fr;
function handleFileSelect() {
    if (!window.File || !window.FileReader || !window.FileList || !window.Blob) {
        alert('The File APIs are not fully supported in this browser.');
        return;
    }

    let input = document.getElementById('fileinput');
    if (!input) {
        alert("Um, couldn't find the fileinput element.");
    }
    else if (!input.files) {
        alert("This browser doesn't seem to support the `files` property of file inputs.");
    }
    else if (!input.files[0]) {
        alert("Please select a file before clicking 'Load'");
    }
    else {
        let file = input.files[0];
        fr = new FileReader();
        fr.onload = receivedText;
        fr.readAsText(file);

    }
}

function receivedText() {
    document.getElementById('editor').appendChild(document.createTextNode(csvJSON(fr.result)));
}

//var csv is the CSV file with headers
function csvJSON(csv) {
    let lines = csv.split("\n");
    let result = [];
    let headers;
    for (let i = 0; i < lines.length; i++) {
        headers = lines[i].split("\n");
    }
    var cont = 0;
    for (let i = 0; i < lines.length; i++) {

        let obj = {};
        let currentline = lines[i].split("\n");
        for (let j = 0; j < headers.length; j++) {
            obj[cont] = currentline[j];
        }
        cont++;
        result.push(obj);
    }

    console.log(JSON.stringify(result));
    return JSON.stringify(result); //JSON
}