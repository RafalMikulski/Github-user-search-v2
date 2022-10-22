<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Github user search v2</title>
</head>

<body>
    <main class="container">
        <h1>Github profile search</h1>

        <!-- search bar -->
        <div class="search-bar">
            <input type="search" class="search-name" id="search-name" placeholder="Enter Github name..." required
                minlength="2" maxlength="39" size="34">
            <button id="submit"><img src="images/search-icon.svg" class="submit-icon"></button>
        </div>

        <!-- display board -->
        <div class="display-container">
            <div class="profile-header-wraper">
                <img class="avatar" id="avatar" src="./images/github-logo.svg">
                <div class="data">
                    <h3 id="name" class="name">x</h3>
                    <p id="user" class="user">@</p>
                    <p id="date" class="date">xxxx.xx.xx</p>
                </div>
            </div>
            <p id="bio" class="bio">
                <!-- do Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis,
                  culpa sint aperiam vel libero mollitia iste? Velit suscipit quisquam,
                  fuga explicabo autem cum quod iste, eos ipsum atque culpa! Recusandae! -->
            </p>
            <?php 
                $rows = [
                    ['Followers', 'Following'],
                    ['Repos', 'Gists'],
                    ['Location', 'Twitter'],
                    ['Company'],
                    ['Blog']
                ];

                foreach ( $rows as $row ):
            ?>
            <div class="profile-wraper">
                <?php foreach ( $row as $col ): ?>
                <div class="stat-cel">
                    <p class="title"><?php echo $col; ?></p>
                    <p id="<?= strtolower($col); ?>" class="value">x</p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <script src="scripts/main.js"></script>
</body>

</html>