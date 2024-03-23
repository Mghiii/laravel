<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #000000;
            font-weight: bold;
            color: aliceblue;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Style the button */
        form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Change button color on hover */
        form button:hover {
            background-color: #0056b3;
        }

        .lol {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .delete {
            background-color: rgba(218, 0, 0, 0.63);
        }

        .delete:hover {
            background-color: rgb(218, 0, 0);
        }

        .update {
            background-color: rgba(3, 197, 3, 0.767);
        }

        .update:hover {
            background-color: rgb(3, 197, 3);
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>CodeM</th>
                <th>MH</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($test as $item)
                <tr>
                    <td>{{ $item->Titre }}</td>
                    <td>{{ $item->codeM }}</td>
                    <td>{{ $item->MH }}</td>
                    <td>
                        <div class="lol">
                            <form action="{{ route('edit', ['module' => $item->codeM]) }}" method="GET">
                                <button type="submit" class="update">Update</button>
                            </form>
                            |
                            <form action="{{ route('destroy', ['module' => $item->codeM]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete">Delete</button>
                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action={{ route('create') }}>
        <button type="submit">Create</button>
    </form>
</body>

</html>
