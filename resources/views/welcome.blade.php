<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            text-align: center;
            margin-top: 50px;
        }

        button {
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #45a049;
        }

        h1 {
            font-size: 36px;
            margin: 20px 0;
        }
    </style>

    @livewireStyles
</head>
<body>
<h1 style="text-align: center" >Salut tt le monde  </h1>
@livewire('counter')
@livewireScripts
</body>
</html>
