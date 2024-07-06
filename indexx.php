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
            font-family: 'Comic Sans MS', cursive;
            overflow: hidden;
        }
        .title-container {
            text-align: center;
            padding: 20px;
            position: relative;
        }
        .title {
            font-size: 3rem;
            font-weight: bold;
            color: #f8f8f8;
            letter-spacing: 0.2em;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
            padding: 20px;
            border: 4px solid #f8f8f8;
            box-shadow: 0 0 20px rgba(255,255,255,0.3);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            transform: rotate(-5deg);
        }
        .title:hover {
            transform: scale(1.05) rotate(5deg);
            box-shadow: 0 0 30px rgba(255,255,255,0.5);
        }
        .image-container {
            margin-top: 20px;
            position: relative;
        }
        .bookshelf-image {
            max-width: 350px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }
        .bookshelf-image:hover {
            transform: scale(1.1) rotate(360deg);
        }
        .button-container {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }
        .button {
            padding: 10px 20px;
            font-size: 1rem;
            color: #1a1a1a;
            background-color: #f8f8f8;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }
        .button:hover {
            background-color: #e0e0e0;
            transform: translateY(-3px) rotate(5deg);
            box-shadow: 0 4px 8px rgba(255,255,255,0.2);
        }
        .button::after {
            content: '👻';
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 20px;
            opacity: 0;
            transition: all 0.3s ease;
        }
        .button:hover::after {
            top: 5px;
            opacity: 1;
        }
        .floating-worry {
            position: absolute;
            font-size: 24px;
            opacity: 0.5;
            animation: float 10s infinite linear;
        }
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-100vh) rotate(360deg); }
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
                padding: 8px 16px;
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
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="./img/logo.jpg" alt="Bookshelf of Worries" class="bookshelf-image">
    </div>    

    <div class="title-container">
        <a href="user.php"><h1 class="title">Bookshelf Of Worries</h1></a>
    </div>

    <div class="button-container">
        <a href="signup.php" class="button">新規登録</a>
        <a href="login.php" class="button">ログイン</a>
    </div>

    <script>
        const worries = ['💸', '😱', '🤔', '😰', '🙀', '😓', '😖'];
        for (let i = 0; i < 20; i++) {
            const worry = document.createElement('div');
            worry.className = 'floating-worry';
            worry.style.left = `${Math.random() * 100}vw`;
            worry.style.animationDuration = `${5 + Math.random() * 10}s`;
            worry.style.animationDelay = `${Math.random() * 5}s`;
            worry.textContent = worries[Math.floor(Math.random() * worries.length)];
            document.body.appendChild(worry);
        }
    </script>
</body>
</html>