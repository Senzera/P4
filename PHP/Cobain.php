<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Facebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Facebook</h1>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Friends</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="left-column">
            <h2>News Feed</h2>
            {% for post in posts %}
            <div class="post">
                <h3>{{ users[post["user_id"]-1]["name"] }}</h3>
                <p>{{ post["content"] }}</p>
            </div>
            {% endfor %}
        </section>

        <section class="right-column">
            <h2>Suggestions</h2>
            <ul>
                <li>John Smith</li>
                <li>Jane Smith</li>
                <li>Bob Johnson</li>
                <li>Mary Johnson</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Facebook. All Rights Reserved.</p>
    </footer>
</body>
</html>
