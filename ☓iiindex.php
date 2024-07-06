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
            margin-top: 30px;
        }
        .book-button {
            width: 120px;
            height: 180px;
            background-color: #8B4513;
            border: none;
            border-radius: 5px 15px 15px 5px;
            color: #f8f8f8;
            font-family: 'Georgia', serif;
            font-size: 1rem;
            text-align: center;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .book-button::before {
            content: '';
            position: absolute;
            left: 10px;
            top: 10px;
            bottom: 10px;
            width: 3px;
            background-color: #f8f8f8;
        }
        .book-button::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 10px;
            height: 3px;
            background-color: #f8f8f8;
        }
        .book-button:hover {
            transform: translateY(-5px) rotateY(-10deg);
            box-shadow: 5px 5px 15px rgba(0,0,0,0.3);
        }
        
        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
                padding: 15px;
            }
            .bookshelf-image {
                max-width: 250px;
            }
            .book-button {
                width: 100px;
                height: 150px;
                font-size: 0.9rem;
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
                gap: 20px;
            }
            .book-button {
                width: 90px;
                height: 135px;
                font-size: 0.8rem;
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
        <a href="user.php" class="book-button">新規登録</a>
        <a href="login.php" class="book-button">ログイン</a>
    </div>
    
</body>
</html>