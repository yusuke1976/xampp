<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">


    <style>
        body {
            background-image: url('./img/background.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            font-family: 'Arial', sans-serif;
            /* background-color: #f0f2f5; */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;

//            padding-top: 70px; /* ナビゲーションバーの高さ分のパディングを追加 */
        }

//        .navbar {
//            background-color: #ff9800;
//            padding: 15px 0;
//            position: fixed; /* ナビゲーションバーを固定 */
//            top: 0; /* 画面上部に配置 */
//            width: 100%; /* 幅を100%に設定 */
//            z-index: 1000; /* 他の要素より前面に表示 */
//        }
        
//        .navbar-brand {
//            color: #ffffff !important;
//            font-weight: 350;
//            font-size: 1.2rem;
//        }

//        .navbar-brand:hover {
//            text-decoration: underline;
//        }

        #registration-form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }
        /* .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        } */
        .image-container {
            text-align: center;
        }
        .image-container img {
            width: 100%;
            max-width: 200px;
            border-radius: 50%;
        }
        .title{
            text-align: center;
            font-weight: bold;
            font-size: 1.2rem;     
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin-bottom: 1rem;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.7rem;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        .hidden {
            display: none;
        }
        select{
            width:200px;
            height:40px;
        }
        #step2{
            text-align: center;
        }
        #step3{
            text-align: center;
        }
        #result{
            text-align: center;
        }
    </style>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="select.php">登録データ一覧</a>
        </div>
</nav> -->

<div id="registration-form">
    <!-- <div class="container"> -->
        <div class="image-container">
            <img src="./img/logo.jpg" alt="">
        </div>
        <p class="title">Bookshelf Of Worries</p>
        <!-- <h1>新規登録</h1> -->
        <div id="step1">
            <form id="step1-form">
                <input type="text" id="username" placeholder="ユーザー名" required>
                <input type="email" id="email" placeholder="メールアドレス" required>
                <input type="password" name="password" id="password" placeholder="パスワード" required>
                <input type="password" name="confirm"  oninput="CheckPassword(this)" placeholder="パスワード(確認)" required>
                <button type="submit">次へ</button>
            </form>
        </div>

        <div id="step2" class="hidden">
            <p>現在、どのようなことでお悩みですか？</p>
            <select id="concern">
                <option value="">選択してください</option>
                <option value="work">仕事</option>
                <option value="relationship">人間関係</option>
                <option value="health">健康</option>
                <option value="future">将来</option>
                <option value="other">その他</option>
            </select>
            <button onclick="nextStep(3)">次へ</button>
        </div>

        <div id="step3" class="hidden">
            <p>どのようなジャンルの本が好きですか？</p>
            <select id="genre">
                <option value="">選択してください</option>
                <option value="selfhelp">自己啓発</option>
                <option value="psychology">心理学</option>
                <option value="philosophy">哲学</option>
                <option value="fiction">小説</option>
                <option value="biography">伝記</option>
                <option value="another">その他</option>
            </select>
            <button onclick="finishRegistration()">登録</button>
        </div>

        <!-- <div id="result" class="hidden">
            <h2>登録完了</h2>
            <p id="summary"></p>
        </div> -->

        <div id="result" class="hidden">
            <h2>登録完了</h2>
            <p id="summary"></p>
            <form action="user_insert.php" method="post" id="insertForm">
                <input type="hidden" id="hiddenUsername" name="username">
                <input type="hidden" id="hiddenEmail" name="email">
                <input type="hidden" id="hiddenPassword" name="password">
                <input type="hidden" id="hiddenConcern" name="concern">
                <input type="hidden" id="hiddenGenre" name="genre">
                <button type="submit">登録を確定する</button>
            </form>
        </div>

    <!-- </div> -->
</div>

<script>
	function CheckPassword(confirm){
        var input1 = password.value;
        var input2 = confirm.value;
        if(input1 != input2){
            confirm.setCustomValidity("入力値が一致しません。");
        }else{
            confirm.setCustomValidity('');
        }
    }

    document.getElementById('step1-form').addEventListener('submit', function(event) {
        event.preventDefault();
        nextStep(2);
    });

    
    
    // function CheckPassword(confirm){
	// 	// 入力値取得
	// 	var input1 = password.value;
	// 	var input2 = confirm.value;
	// 	// パスワード比較
	// 	if(input1 != input2){
	// 		confirm.setCustomValidity("入力値が一致しません。");
	// 	}else{
	// 		confirm.setCustomValidity('');
	// 	}
	// }
</script>

<script>
        function nextStep(step) {
            for (let i = 1; i <= 3; i++) {
                document.getElementById(`step${i}`).classList.add('hidden');
            }
            document.getElementById(`step${step}`).classList.remove('hidden');
        }

        function finishRegistration() {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const concern = document.getElementById('concern').value;
            const genre = document.getElementById('genre').value;

            document.getElementById('summary').innerHTML = `
                ${username}さん、ご登録ありがとうございます。<br>
                登録メールアドレス: ${email}<br>
                現在の悩み: ${getConcernText(concern)}<br>
                好きな本のジャンル: ${getGenreText(genre)}<br><br>
                悩み解決のヒントが見つかります！
            `;

            for (let i = 1; i <= 3; i++) {
                document.getElementById(`step${i}`).classList.add('hidden');
            }
            document.getElementById('result').classList.remove('hidden');
        }

        function getConcernText(concern) {
            const concerns = {
                'work': '仕事', 'relationship': '人間関係', 'health': '健康',
                'future': '将来', 'other': 'その他'
            };
            return concerns[concern] || '未選択';
        }

        function getGenreText(genre) {
            const genres = {
                'selfhelp': '自己啓発', 'psychology': '心理学', 'philosophy': '哲学',
                'fiction': '小説', 'biography': '伝記' , 'another': 'その他'
            };
            return genres[genre] || '未選択';
        }
    </script>

</body>
</html>