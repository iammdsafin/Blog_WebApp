<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Ex</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body 
        {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
        }

        .container 
        {
            background-color: #ffffff;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.5);
            max-width: 1350px;
            padding: 40px;
            text-align: center;
            border-radius: 10px;
            display: flex;
            align-items: center;
            border: 5px solid black;
        }



        .title 
        {
            font-size: 4rem;
            font-family: 'consolas', consolas;
        }

        .title span:first-child 
        {
            color: #101010;
        }

        .title span:last-child 
        {
            color: #101010;
        }

        .image-container 
        {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

        .content-container 
        {
            flex: 1;
            text-align: left;
        }

        .feature-list 
        {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .feature-list li 
        {
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
            line-height: 1.5;
        }

        .feature-list li:before 
        {
            content: "\2713";
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border: 2.5px solid #101010;
            background-color: #01d449;
            border-radius: 50%;
            text-align: center;
            font-size: 12px;
            line-height: 15px;
            color: #ffffff;
        }

        .feature-list li code 
        {
            color: #37bcf7;
            font-weight: bold;
        }

        .btnReg {
            display: inline-block;
            padding: 4px 10px;
            font-size: 14px;
            background-color: #5cb85c;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
        }

        .btnReg:hover 
        {
            background-color: #449d44;
        }

        .btnLog 
        {
            display: inline-block;
            padding: 4px 10px;
            font-size: 14px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
            border: 2px solid black;

        }

        .btnLogLogin 
        {
            display: inline-block;
            padding: 4px 10px;
            font-size: 14px;
            background-color: #166fe5;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
            border: 2px solid black;

        }

        .btnLogRegister 
        {
            display: inline-block;
            padding: 4px 10px;
            font-size: 14px;
            background-color: #01d449;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
            border: 2px solid black;

        }

        .btnLog:hover 
        {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-container">
            <header>
                <h1 class="text-3xl font-semibold mb-6 text-left title">
                    <span>Blog</span><span> Ex!</span>
                </h1>
            </header>
            <br>

            <p class="text-gray-500 text-left">Blog Ex is a platform where you can easily post your thoughts and queries.</p>

            <div class="mt-4 text-left">
                <p class="text-xl font-semibold mb-2">For whom & what we offer?</p>
                <ul class="list-disc list-inside feature-list">
                    <li>For <code class="text-sm font-bold text-blue-500">Students</code>, <code class="text-sm font-bold text-blue-500">Proffetional</code>, or <code class="text-sm font-bold text-blue-500">Anyone</code>.</li>
                    <li>Thoughts <code class="text-sm font-bold text-blue-500">Cooks</code> at your doorstep.</li>
                    <li>Safe & Secure.</li>
                    <li>Easy to use.</li>
                </ul>
            </div>

            <div class="mt-7 text-left">
                <p class="text-xl font-semibold mb-2">Want to dig deeper into Blogs?</p>
                <a href="/login" class="btnLogLogin">Login</a>
                <a href="/register" class="btnLogRegister">Register</a>



            </div>
        </div>
        <img src="{{ asset('images/Blog.png') }}" alt="Cook Image">
    </div>
</body>
</html>