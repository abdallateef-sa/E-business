<?php
session_start();

// بيانات الكتب
$books = [
    [
        'title' => 'The Alchemist',
        'author' => 'Paulo Coelho',
        'description' => 'A novel about following your dreams.',
        'youtube_link' => 'https://youtu.be/q4Ifnw3dEYc',
        'image' => 'image/book1.jpg'
    ],
    [
        'title' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'description' => 'A story about racial injustice and loss of innocence.',
        'youtube_link' => '3V2rmbijYek',
        'image' => 'image/book2.jpg'
    ],
    // إضافة المزيد من الكتب هنا
    [
        'title' => '1984',
        'author' => 'George Orwell',
        'description' => 'A dystopian novel depicting totalitarian society.',
        'youtube_link' => '3V2rmbijYek',
        'image' => 'image/book3.jpg'
    ],
    [
        'title' => 'Pride and Prejudice',
        'author' => 'Jane Austen',
        'description' => 'A classic novel exploring social status and romance.',
        'youtube_link' => '3V2rmbijYek',
        'image' => 'image/book4.jpg'
    ],
    [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'description' => 'A story of wealth, love, and tragedy in the Roaring Twenties.',
        'youtube_link' => '3V2rmbijYek',
        'image' => 'image/book5.jpg'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    <title><?php echo $books[0]['title']; ?> Details</title>

    <script src="Script.js"></script>


    <button id="back-to-top" onclick="backToTop()">^</button>

</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Readme</a></p>
        </div>

        <div class="right-links">

            <a href="home.php"><button class="btn">Your account</button></a>
        </div>

        <div class="right-links">

            <a href="php/logout.php"><button class="btn">Log Out</button></a>
        </div>

    </div>
    <main>
        <div class="book-details">
            <h2><?php echo $books[0]['title']; ?></h2>
            <p><strong>Author:</strong> <?php echo $books[0]['author']; ?></p>
            <p><strong>Description:</strong> <?php echo $books[0]['description']; ?></p>

            <img src="<?php echo $books[0]['image']; ?>" alt="<?php echo $books[0]['title']; ?>">

            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $books[0]['youtube_link']; ?>" frameborder="0" allowfullscreen></iframe>

            <!-- تكرار العرض للكتب الأخرى -->
            <?php for ($i = 1; $i < count($books); $i++) : ?>
                <div class="book">
                    <h3><?php echo $books[$i]['title']; ?></h3>
                    <p><strong>Author:</strong> <?php echo $books[$i]['author']; ?></p>
                    <p><strong>Description:</strong> <?php echo $books[$i]['description']; ?></p>
                    <img src="<?php echo $books[$i]['image']; ?>" alt="<?php echo $books[$i]['title']; ?>">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $books[$i]['youtube_link']; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php endfor; ?>


        </div>

    </main>
</body>

</html>