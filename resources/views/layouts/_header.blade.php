<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('styles/index.css')}}">
    <link rel="stylesheet" href="{{ asset ('styles/signup.css')}}">
    <link rel="stylesheet" href="{{ asset ('styles/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="images/logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&family=Kanit:wght@300;400;500&family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Noto+Serif:wght@300;400&display=swap" rel="stylesheet">
    <title>To Do List</title>
</head>
<body class="font-cabin">
    <section class="bg-orange-50 drop-shadow-lg">
        <nav class="p-9 flex justify-between">
            <div class="flex">
                <img class="h-7" src="images/logo.png">
                <a href="/" class="font-bold text-lg pl-2 hover:text-stone-600 duration-700">ToDo-List</a>
            </div>
            <div class="">
                <ul class="flex">
                    <li class=""><a class="hover:font-bold px-2 hover:text-stone-600 hover:border-2 hover:border-stone-500 rounded-md duration-300" href="/">Home</a></li>
                    @guest
                    <li class=""><a class="hover:font-bold px-2 hover:text-stone-600 hover:border-2 hover:border-stone-500 rounded-md duration-300" href="/signup">Sign Up</a></li>
                    <li class=""><a class="hover:font-bold px-2 hover:text-stone-600 hover:border-2 hover:border-stone-500 rounded-md duration-300" href="/login">Log In</a></li>    
                    @endguest
                    @auth
                    <li class=""><a class="hover:font-bold px-2 hover:text-stone-600 hover:border-2 hover:border-stone-500 rounded-md duration-300" href="#">{{auth()->user()->username}}</a></li>
                    <form action="/logout" method="POST">
                        @csrf
                        <li class=""><button class="hover:font-bold px-2 hover:text-stone-600 hover:border-2 hover:border-stone-500 rounded-md duration-300" type="submit">Log out</button></li>
                    </form>
                    @endauth
                    <li class=""><a class="hover:font-bold px-2 hover:text-stone-600 hover:border-2 hover:border-stone-500 rounded-md duration-300" href="">Contact Me</a></li>
                </ul>
            </div>
        </nav>
    </section>
