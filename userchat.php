<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <style>
        /* 前のスタイルをここに保持 */
    </style>
</head>
<body>
<div id="registration-form">
    <div class="image-container">
        <img src="./img/logo.jpg" alt="">
    </div>
    <p class="title">Bookshelf Of Worries</p>
    <div id="step1">
        <form id="registrationForm" onsubmit="return nextStep(2)">
            <input type="text" id="username" placeholder="ユーザー名" required>
            <input type="email" placeholder="メールアドレス" required>
            <input type="password" placeholder="パスワード" required>
            <input type="password" placeholder="パスワード(確認)" required>
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
        </select>
        <button onclick="finishRegistration()">登録</button>
    </div>
    <div id="result" class="hidden">
        <h2>登録完了</h2>
        <p id="summary"></p>
    </div>
</div>

<script>
    function nextStep(step) {
        if (step === 2) {
            const username = document.getElementById('username').value;
            if (!username) {
                alert('ユーザー名を入力してください。');
                return false;
            }
        }
        for (let i = 1; i <= 3; i++) {
            document.getElementById(`step${i}`).classList.add('hidden');
        }
        document.getElementById(`step${step}`).classList.remove('hidden');
        return false;
    }

    function finishRegistration() {
        const username = document.getElementById('username').value;
        const email = document.querySelector('input[type="email"]').value;
        const concern = document.getElementById('concern').value;
        const genre = document.getElementById('genre').value;

        document.getElementById('summary').innerHTML = `
            ${username}さん、ご登録ありがとうございます。<br>
            登録メールアドレス: ${email}<br>
            現在の悩み: ${getConcernText(concern)}<br>
            好きな本のジャンル: ${getGenreText(genre)}<br><br>
            あなたの悩みに寄り添う本をお探しします。
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
            'fiction': '小説', 'biography': '伝記'
        };
        return genres[genre] || '未選択';
    }
</script>
</body>
</html>