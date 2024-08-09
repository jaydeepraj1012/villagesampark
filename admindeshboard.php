<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1em;
    text-align: center;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
}

nav li {
    margin-right: 20px;
}

nav a {
    color: #fff;
    text-decoration: none;
}

main {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2em;
}

.dashboard {
    background-color: #f7f7f7;
    padding: 1em;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.widgets {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.widget {
    background-color: #fff;
    padding: 1em;
    margin: 1em;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.widget h2 {
    margin-top: 0;
}
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="dashboard">
            <h1>Dashboard</h1>
            <div class="widgets">
                <div class="widget">
                    <h2>Widget 1</h2>
                    <p>This is widget 1</p>
                </div>
                <div class="widget">
                    <h2>Widget 2</h2>
                    <p>This is widget 2</p>
                </div>
                <div class="widget">
                    <h2>Widget 3</h2>
                    <p>This is widget 3</p>
                </div>
            </div>
        </section>
    </main>
    <script >
        // script.js
// Add event listener to nav links
document.querySelectorAll('nav a').forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        console.log(`Clicked on ${link.textContent}`);
    });
});

// Add event listener to widget buttons
document.querySelectorAll('.widget button').forEach((button) => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        console.log(`Clicked on ${button.textContent}`);
    });
});
    </script>
</body>
</html>