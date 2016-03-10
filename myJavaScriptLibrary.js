function testJavaScript()
{
	window.alert("Hello from JavaScript");
}

function storePlayerName(name)
{
      // Check browser support
			if (typeof(Storage) != "undefined")
			{
				// Store
				localStorage.setItem("playerName", name);
				}
			else
			{
				return "Sorry, your browser does not support Web Storage...";
			}
}

function getPlayerName()
{

    // Check browser support
		if (typeof(Storage) != "undefined")
		{
			// Retrieve
			var name = localStorage.getItem("playerName");
       return name;
		}
		else
		{
			return "Sorry, your browser does not support Web Storage...";
		}

}

function doesPlayerExist()
{
    // Check browser support
		if (typeof(Storage) != "undefined")
		{
			if (localStorage.getItem("playerName") != null)
      {
        var name = localStorage.getItem("playerName");
        return true;
      }
      else
      { return false;}
		}
		else
		{
			return "Sorry, your browser does not support Web Storage...";
		}
}

function CaesarCipher(str, num) {

    str = str.toLowerCase();
    var result = '';
    var charcode = 0;

    for (i = 0; i < str.length; i++) {
        charcode = (str[i].charCodeAt()) + num;
        result += String.fromCharCode(charcode);
    }
    return result;

}

function encryptMe() {
	//window.alert("encryption commencing");
	var string;
	var offset;
	var encryptedString;
	
	string = $('#phrase').val();
	offset = parseInt($('#offset').val());
	encryptedString = CaesarCipher(string, offset);
	//window.alert("Your encrypted string is: " + encryptedString);
	$('#output').html('<div class="alert alert-success"><strong>Success!</strong> Your encrypted string is:<br /><br />   ' + encryptedString + ' </div>');
}

function sayHello () {
	window.alert("Hello from the JavaScript Library");
	
}