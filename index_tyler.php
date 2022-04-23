<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var from = null, start = 0, url = 'chat.php';
        $(document).ready(function(){
            from = prompt("Please enter your nickname");
            $('form').submit(function (e) {
                $.post(url, {
                    message: $('#message').val(),
                    from: from
                });
                $('#message').val('');
                return false;
            })
        })

    </script>
    <style>
        body{
            margin: 0;
            overflow: hidden;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', 'Geneva', 'Verdana';
        }
        #messages{
            height: 88vh;
            overflow-x: hidden;
            padding: 10px;
        }
        form{
            display: flex;
        }
        input{
            font-size: 1.2rem;
            padding: 10px;
            margin: 10px 5px;
            appearance: none;
            -webkit-appearance: none;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        #message{
            flex: 2;
        }
    </style>

</head>
<body>
    <div id="messages"></div>
    <form method="post" action="chat.php">
        <input type="text" id="message" name="message" autocomplete="off" autofocus placeholder="Type message">
        <input type="submit" value="Send">
    </form>

</body>

</html>
