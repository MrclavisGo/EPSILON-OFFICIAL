<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>EP Clicker</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</head>
<body>
    <div id="app">
        <header>
            <div class="balance-container">
                <span id="balance">0.00</span> EP
            </div>
        </header>

        <main>
            <section id="sec-clicker" class="active-section">
                <div class="click-area">
                    <button id="click-btn">CLICK ME</button>
                </div>
            </section>

            <section id="sec-profile" style="display:none;">
                <h2>Профиль</h2>
                <div class="profile-info">
                    <p>Имя: <span id="prof-name">...</span></p>
                    <p>ID: <span id="prof-id">...</span></p>
                </div>
                
                <h3>Мои NFT (Нажмите для продажи)</h3>
                <div id="my-nfts" class="nft-grid"></div>
                
                <h3>Мои активные продажи</h3>
                <div id="my-listings" class="nft-grid"></div>
                
                <hr>
                <h3>Перевод EP</h3>
                <div class="form-group">
                    <input type="number" id="trans-id" placeholder="Telegram ID получателя">
                    <input type="number" id="trans-amount" placeholder="Сумма EP">
                    <button onclick="sendTransfer()">Отправить</button>
                </div>

                <h3>Вывод в Telegram Stars</h3>
                <div class="form-group">
                    <p class="info-text">Курс: 1000 EP = 15 Stars. Мин: 1000, Макс: 6700/нед.</p>
                    <input type="number" id="with-amount" placeholder="Сумма EP">
                    <button onclick="requestWithdraw()">Заказать вывод</button>
                </div>
            </section>

            <section id="sec-shop" style="display:none;">
                <h2>Официальный магазин</h2>
                <div id="shop-list" class="nft-grid"></div>
            </section>

            <section id="sec-market" style="display:none;">
                <h2>P2P Маркет</h2>
                <p class="info-text">Покупайте NFT у других игроков</p>
                <div id="market-list" class="nft-grid"></div>
            </section>

            <section id="sec-top" style="display:none;">
                <h2>Топ игроков</h2>
                <ul id="top-list"></ul>
            </section>

            <section id="sec-chat" style="display:none;">
                <h2>Общий чат</h2>
                <div id="chat-window"></div>
                <div class="chat-input">
                    <input type="text" id="chat-msg" placeholder="Сообщение...">
                    <button onclick="sendMessage()">Send</button>
                </div>
            </section>
        </main>

        <nav>
            <button onclick="showSection('sec-clicker')">🖱️ Клик</button>
            <button onclick="showSection('sec-shop')">🛒 Магазин</button>
            <button onclick="showSection('sec-market')">⚖️ Маркет</button>
            <button onclick="showSection('sec-top')">🏆 Топ</button>
            <button onclick="showSection('sec-chat')">💬 Чат</button>
            <button onclick="showSection('sec-profile')">👤 Профиль</button>
        </nav>
    </div>

    <div id="sell-modal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); z-index:1000; justify-content:center; align-items:center;">
        <div style="background:#2c2c2e; padding:20px; border-radius:10px; width:80%; max-width:300px;">
            <h3>Продажа NFT</h3>
            <p id="sell-nft-name"></p>
            <input type="hidden" id="sell-nft-id">
            <input type="number" id="sell-price" placeholder="Цена (мин. 10 EP)">
            <div style="margin-top:10px; display:flex; justify-content:space-between;">
                <button onclick="closeSellModal()" style="background:#555;">Отмена</button>
                <button onclick="confirmSell()">Продать</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
