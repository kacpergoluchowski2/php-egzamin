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
            font-size: 30px;
            height: 5vh;
            padding-inline: 10px;
        }

        button {
            background-color: black;
            font-size: 20px;
            padding: 5px;
            color: white;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 95vh
        }

        table {
            background-color: rgb(0, 70, 110);
            margin: auto;
            height: 50vh;
            width: 85vw;
        }

        tr {
            background: rgb(0, 70, 110);
        }

        td {
            border: solid white 1px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
    <header> 
        <p> Zobacz nasze wpisy! </p>
        <a href = 'adminPanel.php'> Zaloguj do panelu admina </a>
    </header>
    <main>
        <table id = 'db-data'>
            <tr>
                <td> DATA WPISU </td>
                <td> AUTOR WPISU </td>
                <td> TREŚĆ WPISU </td>
                <td> TYTUŁ WPISU </td>
            </tr>
        </table>
    </main>

    <script>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new mysqli($servername, $username, $password, "użytkownicy");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);    
            }
            echo "console.log('Connected successfully');";

            $sql = "SELECT data_wpisu, autor, tresc, tytul FROM wpisy";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "var wpisy = [";
                while($row = $result->fetch_assoc()) {
                    echo "{ tytul: '" . $row["tytul"] . "', data_wpisu: '" . $row["data_wpisu"] . "', autor: '" . $row["autor"] . "', tresc: '" . $row["tresc"] . "' },";
                }
                echo "];";
            } else {
                echo "var wpisy = [];";
            }    
        ?>

        function create_table() {
            wpisy.forEach(wpis => {
                const row = document.createElement('tr');
                const date = document.createElement('td');
                const autor = document.createElement('td');
                const tresc = document.createElement('td');
                const tytul = document.createElement('td');


                date.innerHTML = wpis.data_wpisu;
                autor.innerHTML = wpis.autor;
                tresc.innerHTML = wpis.tresc;
                tytul.innerHTML = wpis.tytul;
                row.appendChild(date);
                row.appendChild(autor);
                row.appendChild(tresc);
                row.appendChild(tytul);

                document.querySelector('#db-data').appendChild(row);
            })
        }

        create_table();
    </script>
</body>
</html>
