function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      document.getElementById("demo").innerHTML = this.responseText;
  };
  xhttp.open("GET", "a.html", true);
  xhttp.send();
}