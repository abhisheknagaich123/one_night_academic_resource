<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .card {
            display: flex;
            max-width: 400px;
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
        }

        .card img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 0 0 8px;
        }

        .card-content {
            padding: 20px;
            flex: 1;
        }

        .card-content h2 {
            margin-bottom: 10px;
        }

        .social-icons a {
            margin-right: 10px;
            color: #0077b5; /* LinkedIn blue color */
        }

        .social-icons i {
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="card">
    <img src="img/abhishek.jpeg" alt="Profile Photo">
    <div class="card-content">
        <h2>Abhishek Nagaich</h2>
        <p>Student</p>
        <p>One Night acadmeic resource</p>
        <div class="social-icons">
            <a href="your-linkedin-profile" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="your-instagram-profile" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>

</body>
</html>
