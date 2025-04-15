
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['user'];

$cars = [
    [
        'model' => 'Ferrari 812 Superfast',
        'image' => 'https://www.blackxperience.com/assets/content/blackauto/autonews/ferrari-812-superfast-wheelsandmore-tuning-2.jpg',
        'description' => 'The pinnacle of Ferrari V12 performance.',
    ],
    [
        'model' => 'Ferrari F8 Tributo',
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOFPd0PYDrJV-FLYKr5afA5Itz3lIALBzbzg&s',
        'description' => 'An homage to the most powerful V8 in Ferrari history.',
    ],
    [
        'model' => 'Ferrari Roma',
        'image' => 'https://c4.wallpaperflare.com/wallpaper/744/67/759/ferrari-roma-vehicle-car-hd-wallpaper-preview.jpg',
        'description' => 'La Nuova Dolce Vita. Timeless elegance.',
    ],
    [
        'model' => 'Ferrari SF90 Stradale',
        'image' => 'https://cloud.leparking.fr/2025/01/23/12/33/ferrari-sf90-stradale-spider-4-0-turbo-v8-f1-phev-noir_9265056423.jpg',
        'description' => 'The first series production PHEV from Ferrari.',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="icon" href="ferrari_logo.png" type="image/x-icon">
   </head>
<body>
    <nav>
    <img src="ferari.png" alt="logo" width="60px" class="mt-2">
    </nav>
    <div class="member-content">
        <div class="member-header">
            <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
            <a href="logout.php">Logout</a>
        </div>
        <h3>Ferrari Showroom</h3>
        <div class="car-gallery">
            <?php foreach ($cars as $car): ?>
                <div class="car-item">
                   <img src="<?php echo htmlspecialchars($car['image']); ?>" alt="<?php echo htmlspecialchars($car['model']); ?>">   
                    <h3><?php echo htmlspecialchars($car['model']); ?></h3>
                     <p><?php echo htmlspecialchars($car['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body {
            background: #000;
            min-height: 100vh;
            position: relative;
        }
        body::before {
            content: "";
            position: fixed;
            left: 0;
            top: 0;
            opacity: 0.5;
            width: 100vw;
            height: 100vh;
            background: url("car.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: 0;
        }
        nav {
            position: fixed;
            padding: 25px 60px;
            z-index: 2;
        }
        nav a img {
            width: 60px;
        }
        .member-content {
            position: relative;
            z-index: 1;
            width: 60%;
            max-width: 1100px;
            margin: 120px auto 40px auto;
            background: rgba(0,0,0,0.80);
            border-radius: 8px;
            padding: 40px 30px 30px 30px;
            box-shadow: 0 8px 32px 0 rgba(0,0,0,0.37);
        }
        .member-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .member-header h2 {
            color: #fff;
            font-size: 2rem;
            font-weight: 600;
        }
        .member-header a {
            color: #fff;
            background: #e50914;
            padding: 10px 22px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.2s;
        }
        .member-header a:hover {
            background: #c40812;
        }
        h3 {
            color: #e50914;
            font-size: 1.5rem;
            margin-bottom: 25px;
            font-weight: 500;
        }
        .car-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 32px;
            padding: 20px;
        }
        .car-item {
            background: rgba(30,30,30,0.95);
            border-radius: 8px;
            box-shadow: 0 4px 16px 0 rgba(0,0,0,0.25);
            padding: 24px 18px 18px 18px;
            text-align: center;
            transition: transform 0.15s, box-shadow 0.15s;
        }
        .car-item:hover {
            transform: translateY(-6px) scale(1.03);
            box-shadow: 0 8px 32px 0 rgba(229,9,20,0.15);
        }
        .car-item img {
            width: 100%;
            max-width: 220px;
            height: 120px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 18px;
            background: #222;
        }
        .car-item h3 {
            color: #fff;
            font-size: 1.15rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .car-item p {
            color: #b3b3b3;
            font-size: 1rem;
            margin-bottom: 0;
        }
        @media (max-width: 900px) {
            .member-content {
                padding: 30px 10px 20px 10px;
            }
            nav {
                padding: 18px 20px;
            }
        }
        @media (max-width: 600px) {
            .member-content {
                margin: 90px 5px 20px 5px;
                padding: 18px 4px 10px 4px;
            }
            .car-gallery {
                grid-template-columns: 1fr;
                gap: 18px;
            }
            nav a img {
                width: 40px;
            }
        }
    </style>
</html>
