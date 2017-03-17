$(window).load(function() {

  var theWindow        = $(window),
  $bg              = $("#bg"),
  aspectRatio      = $bg.width() / $bg.height();

  function resizeBg() {

    if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
      $bg
      .removeClass()
      .addClass('bgheight');
    } else {
      $bg
      .removeClass()
      .addClass('bgwidth');
    }

  }
  theWindow.resize(resizeBg).trigger("resize");
});


function sayHello()
{
  window.alert("Heya!");
}

function backgroundSwitcher() {
  var imageArray = ["Images/butterfly.JPG", "Images/sunset.JPG"];

  //check current image assigned to #bg
  var src = $('#bg').attr("src");

  //imageArray.forEach(checkSrc);

  for (var i = 0; i <imageArray.length; i++)
  {
    var result = checkSrc(imageArray[i], i);

    if (result)
    {
      if ($('#bg').attr("src") === "Images/sunset.JPG")
      {
        $('#header').removeClass('headerAlt');
        $('#nav').removeClass('navAlt');
        $('#nav').addClass('navMain');
        $('a').removeClass('navLinkAlt');
        $('#changeBG').removeClass('changeBGAlt');
      }

      if ($('#bg').attr("src") === "Images/butterfly.JPG")
      {
        $('#header').addClass('headerAlt');
        $('#nav').addClass('navAlt');
        $('#nav').removeClass('navMain');
        $('a').addClass('navLinkAlt');
        $('#changeBG').addClass('changeBGAlt');
      }

      break;
    }
  }
}

function checkSrc(item, index) {

  var src = $('#bg').attr("src");
  if (item === src)
  {
    //skip item as it's the same picture
    return false;
  }
  else {
    reloadBg(item);
    return true;
  }
}

function reloadBg(newSrc) {

  $('#bg').attr("src", newSrc);
  var theWindow        = $(window),
  $bg              = $("#bg"),
  aspectRatio      = $bg.width() / $bg.height();

  function resizeBg() {

    if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
      $bg
      .removeClass()
      .addClass('bgheight');
    } else {
      $bg
      .removeClass()
      .addClass('bgwidth');
    }

  }
  theWindow.resize(resizeBg).trigger("resize");
}

function contactDiceServer(dieType)
{
      $.ajax({
      type: "POST",
      url: "rollDieHandler.php",
      data: { dietype: dieType }
    }).done(function( msg ) {
      //window.alert( "You rolled: " + msg );
      $('#result').html(msg);
      $('#resultlabel').removeClass('hidden');
    });
}
