<link rel="stylesheet" href="../css/footer.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
$(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() == $(document).height()) {
       footer();
   }
}).resize(function(){
  if(Math.round($("body").height()+100) == $(window).height()){
    footer();
  }
  $("#content").css("padding-top", $("header").height());
}).ready(function(){
  $("#footer-bottom").addClass("show");
  $("#footer-bottom").show();
  $("#content").css("padding-top", $("header").height());
  footer();
});

function footer(){
      var scroll = $(window).scrollTop();
      if(scroll>20 || Math.round($("body").height()+100) == $(window).height()){
          $("#footer-bottom").fadeIn("slow").addClass("show");
      }else{
          $("#footer-bottom").fadeOut("slow").removeClass("show");
      }

      clearTimeout($.data(this, 'scrollTimer'));
      $.data(this, 'scrollTimer', setTimeout(function() {
        //Math.floor used because it added .800048828125 to first part for some reason
          if ($('#footer-bottom').is(':hover') || (Math.round($("body").height()+100) == $(window).height()) || Math.floor($(window).scrollTop() + $(window).height() + 60) >= $(document).height()) {
          footer();
      }  else{
        $("#footer-bottom").fadeOut("slow");
      }
  }, 2000));
  }
$(window).scroll(function(event) {
  footer();
});
</script>
<?php

/////////////////////////////////////////////////////
//FUNCTIONS/////////////////////////////////////////
////////////////////////////////////////////////////

function printRefferences(){
  $url = array("lol.exe","lol.exe","lol.exe"); // ONLY ACCEPTS AN ARRAY OF URLS
  $amount = (IsMobile() ? 2 : 7); // 2 is for mobile 7 is for pc

  for ($i=0; $i < $amount; $i++) {
    //echo the image container.
    echo  "<div class='footer-reference-container'>";
    // REPEAT 5 times
    if(isset($url[$i]) && (filter_var(filter_var($url[$i], FILTER_SANITIZE_URL), FILTER_VALIDATE_URL) === true)){
      //URL is set and URL exists
      echo "<img class='footer-reference-item' src='../images/" . $url[$i] . "' alt='404: file not found'>";
    }else{
      //URL failed to load
      echo "<img class='footer-reference-item' src='../images/350x150.png' alt='File not found'>";
    }
    echo "</div>";
  }
}

function IsMobile(){
  $useragent=$_SERVER['HTTP_USER_AGENT']; //Get uname of device

   //check if it finds mobile tags are in uname
  if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
   //uname contains a mobile tag
  return true;
}

/////////////////////////////////////////////////////
//HTML printing//////////////////////////////////////
////////////////////////////////////////////////////
echo"
<div class='clear'></div>
<footer>
<div id='footer-reference'>";
  printRefferences();
echo "</div>
  <div id='footer-bottom'>
    <div id='footer-icon'>
      <div class='footer-icon-container'>
        <span>&#9749;</span>
      </div>
    <div class='footer-icon-container'>
      <span>&#x2709</span>

    </div>
    <div class='footer-icon-container'>
      <span>&#x2706</span>
    </div>
  </div>
  <div id='footer-contact'>";

    //Get Bedrijfnaam, telnummer,
    $info = array("bedrijfnaam" => "Meijer Glasvezeltechniek", "telnummer" => "+31 (0)6 11644811");

    echo "<span>" . $info['bedrijfnaam'] . " |  <a href='tel:" . $info['telnummer'] . "'>" . $info['telnummer'] . "</a></span>
    </div>
  </div>
</footer>
";
?>
