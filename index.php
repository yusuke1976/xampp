<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookshelf Of Worries</title>
    <style>
        body {
            background-color: #1a1a1a;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Georgia', serif;
        }
        .title-container {
            text-align: center;
            padding: 10px;
        }
        .title {
            font-size: 2rem;
            font-weight: bold;
            color: #f8f8f8;
            letter-spacing: 0.2em;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
            position: relative;
            padding: 20px;
            border: 4px solid #f8f8f8;
            box-shadow: 0 0 20px rgba(255,255,255,0.3);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        .image-container {
            margin-top: 20px;
        }
        .bookshelf-image {
            max-width: 350px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255,255,255,0.3);
        }

        .button-container {
            display: flex;
            gap: 20px;
        }
        .button {
            padding: 12px 24px;
            font-size: 1rem;
            color: #f8f8f8;
            background-color: transparent;
            border: 2px solid #f8f8f8;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            font-weight: bold;
            font-family: "MS Pゴシック" ;
        }
        .button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: #f8f8f8;
            transition: all 0.3s ease;
            z-index: -1;
        }
        .button:hover {
            color: #1a1a1a;
        }
        .button:hover::before {
            width: 100%;
        }
        
        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
                padding: 15px;
            }
            .bookshelf-image {
                max-width: 250px;
            }
            .button {
                font-size: 0.9rem;
                padding: 10px 20px;
            }
        }
        
        @media (max-width: 480px) {
            .title {
                font-size: 1.5rem;
                padding: 10px;
                letter-spacing: 0.1em;
            }
            .bookshelf-image {
                max-width: 200px;
            }
            .button-container {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="./img/logo.jpg" alt="Bookshelf of Worries" class="bookshelf-image">
    </div>    

    <div class="title-container">
        <h1 class="title">Bookshelf Of Worries</h1>
    </div>

    <div class="button-container">
        <a href="user.php" class="button">新規登録</a>
        <a href="login.php" class="button">ログイン</a>
    </div>
    
</body>
</html>