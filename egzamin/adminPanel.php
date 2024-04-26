<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
            color: white;
        }

        header {
            color: white;
            background-color: rgb(0, 70, 110);
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 15px;
            height: 5vh;
            padding: 10px;
        }

        form {
            height: 95vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;
        }

        input {
            border-radius: 20px;
            width: 20vw;
            height: 5vh;
            padding-inline: 20px;
        }
    </style>

</head>
<body>
    <header>
        <h1> ZALOGUJ SIĘ DO SYSTEMU </h1>    
        <a href = 'index.php'> POWRÓT </a>    
    </header>
    <form>
        <h1> WPISZ SWOJE DANE </h1>
        <input type = 'text' placeholder = 'login'/>
        <input type = 'password' placeholder = 'password'/>
        <button id ='btn'> ZALOGUJ </h1>
    </form>

    
    <script>
        function redirect() {
            alert("ZALOGOWANO")
        }

        document.querySelector('#btn').addEventListener("click", redirect);
    </script>
</body>
</html>
