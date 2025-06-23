<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift 2 - Formulär</title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 600px;
            margin: 40px auto;
            line-height: 1.6;
        }

        .form-container,
        .output-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        input[type="text"],
        textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .output-container h3 {
            margin-top: 0;
        }

        .info {
            color: #555;
            font-style: italic;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Lämna en kommentar</h2>

        <form action="uppgift2.php" method="post">
            <label for="name">Namn:</label><br>
            <input type="text" id="name" name="username" placeholder="Ditt namn">
            <br>
            <label for="comment">Kommentar:</label><br>
            <textarea id="comment" name="comment" rows="4" placeholder="Din Kommentar"></textarea>
            <br>
            <button type="submit">Skicka</button>
        </form>
    </div>
    
</body>

</html>