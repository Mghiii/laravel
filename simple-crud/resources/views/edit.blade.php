<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Module</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <h1>Edit Module</h1>

    <form action="{{ route('update', $test[0]->codeM) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="codeM">CodeM:</label><br>
        <input type="text" id="codeM" name="codeM" value="{{ $test[0]->codeM }}"><br>
        <label for="Titre">Titre:</label><br>
        <input type="text" id="Titre" name="Titre" value="{{ $test[0]->Titre }}"><br>
        <label for="MH">MH:</label><br>
        <input type="text" id="MH" name="MH" value="{{ $test[0]->MH }}"><br><br>
        <input type="submit" value="Update">
    </form>

</body>


</html>
