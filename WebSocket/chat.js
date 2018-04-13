/*
* Executed when the page has finished loading.
*/


var textView = document.getElementById("text-view");
    var buttonSend = document.getElementById("send-button");
    var buttonStop = document.getElementById("stop-button");
    var label = document.getElementById("status-label");

  var socket = new WebSocket("ws://echo.websocket.org");

  socket.onopen = function (event) {
        label.innerHTML = "Connection open";
    }

  socket.onmessage = function (event) {
        if (typeof event.data === "string") {
            // Display message.
            label.innerHTML = label.innerHTML + "<br />" + event.data;
        }
    }


    socket.onclose = function (event) {
        var code = event.code;
        var reason = event.reason;
        var wasClean = event.wasClean;

        if (wasClean) {
            label.innerHTML = "Connection closed normally.";
        }
        else {
            label.innerHTML = "Connection closed with message: " + reason + " (Code: " + code + ")";
        }
    }


    socket.onerror = function (event) {
        label.innerHTML = "Error: " + event;
    }

    buttonStop.onclick = function (event) {
        if (socket.readyState == WebSocket.OPEN) {
            socket.close();
        }
    }

    buttonSend.onclick = function (event) {
        if (socket.readyState == WebSocket.OPEN) {
            socket.send(textView.value);
        }
    }
