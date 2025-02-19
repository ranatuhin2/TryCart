<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        /* Basic styling for body */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4b6cb7, #182848);
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Style for the login panel */
        .login-panel {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            width: 320px;
            backdrop-filter: blur(10px);
            transform: translateY(0);
            opacity: 0;
            animation: panelAnimation 1s ease-out forwards;
        }

        /* Panel animation */
        @keyframes panelAnimation {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Title of the login panel */
        .login-panel h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: textColorChange 2s infinite alternate;
        }

        /* Text color animation */
        @keyframes textColorChange {
            0% {
                color: #fff;
            }
            100% {
                color: #4CAF50;
            }
        }

        /* Form styling */
        .login-panel form {
            display: flex;
            flex-direction: column;
        }

        /* Input fields */
        .login-panel input[type="text"],
        .login-panel input[type="password"] {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            background: transparent;
            color: #fff;
            outline: none;
            transition: all 0.3s ease-in-out;
        }

        /* Input focus effect */
        .login-panel input[type="text"]:focus,
        .login-panel input[type="password"]:focus {
            border-color: #4CAF50;
            background-color: rgba(0, 0, 0, 0.5);
        }

        /* Button styling */
        .login-panel button {
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        /* Button hover effect */
        .login-panel button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        /* Button focus effect */
        .login-panel button:focus {
            outline: none;
        }
    </style>
</head>
<body>

@yield('content')
@yield('script')


</body>
</html>



