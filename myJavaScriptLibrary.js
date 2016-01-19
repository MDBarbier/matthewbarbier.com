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
