
    function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }


    function myFunction()
    {  
      var str = document.getElementById("codingArea").value;
      var inp = document.getElementById("txtHint").value;
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "Empty";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            //document.getElementById("txtHint").innerHTML = xmlhttp.readyState;
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").value = xmlhttp.responseText;
            }
        };
        //xmlhttp.open("POST", "hackerApi.php?code=" + str, true);
        //xmlhttp.send();
        xmlhttp.open("POST", "hackerApi.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("code="+str);
    }
  }
