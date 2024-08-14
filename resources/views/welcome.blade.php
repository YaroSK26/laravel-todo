<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
             body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                flex-direction: column;
                background-color: black;
                color: white ;
                font-family: 'figtree', sans-serif;
            }

            h1, form {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

             button {
        padding: 10px 20px;
        margin: 10px 0;
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    input {
        border-radius: 5px
    }

    li{
        list-style-type: none ;
    }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black text-white   flex justify-center items-center ">
        <div>
             <h1>TODO list</h1>
            <ul>
                @foreach($listItems as $listItem)
                <form action="{{route("markComplete", $listItem->id)}}" method="post">
                     {{ csrf_field() }}
                <li>{{$listItem->name}} {{$listItem->id}} <button>delete</button>
                </li> 
            </form>
                @endforeach
            </ul>

            <form action="{{route('saveItem')}}" method="POST">
                {{ csrf_field() }}

                <label for="listItem">new todo item</label> </br>
                <input  class="text-black" type="text" name="listItem">
                <button>submit</button>
            </form>
        </div>
    </body>
</html>
