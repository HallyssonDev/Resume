$(document).ready(function(){

  $(".hlsbtn").click(function () {
    $('#sidenav').css('width', '340px');
  });

  $(".closebtn").click(function () {
    $('#sidenav').css('width', '0px');
  });

  $("#principal").click(function(){
    $.ajax({
      url: 'index.php',
      contentType: 'application/php',
      cache: false,
      method: 'POST',
      dataType: 'html',
      data: JSON.stringify({
        id: 'test',
        command: 'echo michael'
      }),
      success: function(result) {
        $("body").html(result);
      }
    });
  });

  $("#projects").click(function(){
    $.ajax({
      url: 'pages/projects/projects.php',
      contentType: 'application/php',
      cache: false,
      method: 'POST',
      dataType: 'html',
      data: JSON.stringify({
        id: 'test',
        command: 'echo michael'
      }),
      success: function(result) {

        $("#newcontent").html(result);
      }
    });
  });

  $("#aboutme").click(function(){
    $.ajax({
      url: 'pages/aboutme/aboutme.php',
      contentType: 'application/php',
      cache: false,
      method: 'POST',
      dataType: 'html',
      data: JSON.stringify({
        id: 'test',
        command: 'echo michael'
      }),
      success: function(result) {
        $("#newcontent").html(result);
      }
    });
  });

  $("#contact").click(function(){
    $.ajax({
      url: 'pages/contact/index.php',
      contentType: 'application/php',
      cache: false,
      method: 'POST',
      dataType: 'html',
      data: JSON.stringify({
        id: 'test',
        command: 'echo michael'
      }),
      success: function(result) {
        $("#newcontent").html(result);
      }
    });
  });






// end of code
});





