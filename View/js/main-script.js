function openNav() {
  document.getElementById("sidenav").style.width = "340px";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}

$(document).ready(function(){
  $("button").click(function(){
    $.ajax({url: "demo_test.txt", success: function(result){
      $("#div1").html(result);
    }});
  });
});