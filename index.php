<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearnPress LMS - Build Skills With Online Course</title>
    <style>
        /* Reset dan variabel CSS */
        :root {
            --primary-color: #d68617ff;
            --secondary-color: #6a75ff;
            --dark-color: #1d2144;
            --light-color: #f8f9fa;
            --gray-color: #6b7280;
            --white: #ffffff;
            --border-radius: 8px;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: #333;
            background-color: var(--white);
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1px 0;
        }
        
        .logo {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 25px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--primary-color);
        }
        
        .nav-buttons {
            display: flex;
            align-items: center;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: var(--border-radius);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-outline {
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            background: transparent;
            margin-right: 10px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--box-shadow);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #f5f7ff 0%, #e6e9ff 100%);
            background-image: url('foto/home.png');
            background-size: cover;
            background-position: center;
            padding: 90px 0;
            text-align: top;
        }
        
        .hero h1 {
            font-size: 48px;
            color: var(--dark-color);
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 18px;
            color: var(--gray-color);
            max-width: 700px;
            text-align: top;
        }
        
        /* Section Styling */
        section {
            padding: 80px 0;
        }
        
        .section-header {
            text-align: top;
            margin-bottom: 50px;
            
        }
        
        .section-header h2 {
            font-size: 36px;
            color: var(--dark-color);
            margin-bottom: 15px;
        }
        
        .section-header p {
            color: var(--gray-color);
            max-width: 600px;
            text-align: top;
        }

        .btn-all-categories {
            position: absolute;
            right: 12%;
            transform: translateY(-50%);
            background: #ffffffff;
            color: black;
            padding: 10px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-all-categories:hover {
            background: #4a4b4fff;
            transform: translateY(-50%) translateY(-2px);
        }
        
        /* Categories Section */
        .categories {
            background-color: var(--light-color);
        }
        
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .category-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            padding: 30px 20px;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
        }
        
        .category-card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--dark-color);
        }
        
        .category-card p {
            color: var(--gray-color);
        }
        
        /* Courses Section */
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .course-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s;
        }
        
        .course-card:hover {
            transform: translateY(-5px);
        }
        
        .course-image {
            height: 200px;
            background-color: #e6e9ff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .course-content {
            padding: 20px;
        }
        
        .course-category {
            color: var(--primary-color);
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 10px;
        }
        
        .course-title {
            font-size: 18px;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .course-instructor {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .instructor-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--gray-color);
            margin-right: 10px;
        }
        
        .instructor-name {
            color: var(--gray-color);
            font-size: 14px;
        }
        
        .course-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 14px;
            color: var(--gray-color);
        }
        
        .course-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .price {
            font-size: 18px;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .price-free {
            color: #10b981;
        }
        
        .view-more {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: var(--white);
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .stat-item h3 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        
        .stat-item p {
            font-size: 16px;
            opacity: 0.9;
        }
        
        /* Features Section */
        .features {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        
        .features-content {
            flex: 1;
        }
        
        .features-content h2 {
            font-size: 36px;
            color: var(--dark-color);
            margin-bottom: 20px;
        }
        
        .features-content p {
            color: var(--gray-color);
            margin-bottom: 30px;
        }
        
        .features-list {
            list-style: none;
        }
        
        .features-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .features-list li:before {
            content: "✓";
            color: var(--primary-color);
            font-weight: bold;
            margin-right: 10px;
        }
        
        .features-image {
            flex: 1;
            height: 400px;
            background-color: #e6e9ff;
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-weight: 600;
        }
        
        /* Testimonials Section */
        .testimonials {
            background-color: var(--light-color);
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--box-shadow);
        }
        
        .testimonial-text {
            color: var(--gray-color);
            margin-bottom: 20px;
            font-style: italic;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--gray-color);
            margin-right: 15px;
        }
        
        .author-info h4 {
            color: var(--dark-color);
            margin-bottom: 5px;
        }
        
        .author-info p {
            color: var(--gray-color);
            font-size: 14px;
        }
        
        /* CTA Section */
        .cta {
            text-align: center;
            background: linear-gradient(135deg, #f5f7ff 0%, #e6e9ff 100%);
        }
        
        .cta h2 {
            font-size: 36px;
            color: var(--dark-color);
            margin-bottom: 20px;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        /* Blog Section */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .blog-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
        }
        
        .blog-image {
            height: 200px;
            background-color: #e6e9ff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .blog-content {
            padding: 20px;
        }
        
        .blog-date {
            color: var(--gray-color);
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .blog-title {
            font-size: 18px;
            color: var(--dark-color);
            margin-bottom: 15px;
        }
        
        .blog-excerpt {
            color: var(--gray-color);
            font-size: 14px;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--white);
            padding: 70px 0 20px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }
        
        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: var(--white);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--white);
        }
        
        .contact-info p {
            margin-bottom: 10px;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }
        .logo img {
            height: 70px;
        }

        .category-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .category-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #dca210ff;
            border-radius: 50%;
        }

        .category-icon img {
            width: 30px;
            height: 30px;
            object-fit: contain;
        }

        .category-card h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #1d2144;
        }

        .category-card p {
            color: #6b7280;
            font-size: 14px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px 0;
            }
            
            .nav-links {
                margin: 20px 0;
            }
            
            .nav-links li {
                margin: 0 10px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .features {
                flex-direction: column;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="" class="logo">
                    <img src="logo/logo.jpg" alt="LearnPress Logo">
                </a>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Page</a></li>
                </ul>
                
                <ul class="nav-links">
                    <li><a href="#">Login</a>  /
                    <a href="register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Build Skills With <br> Online Course</h1>
            <p>We discourse with righteous indignation and dislike men who are so beguiled and demonilized that cannot trouble.</p>
            <div style="margin-top: 30px;">
                <a href="#" class="btn btn-primary">Posts Comment</a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <div class="section-header">
                <h2>Top Categories</h2>
                <p>Explore our Popular Categories</p>
                <a href="#" class="btn-all-categories">All Categories</a>
            </div>
            <div class="categories-grid">
    <?php
    $categories = [
        "Art & Design" => ["courses" => "38 Courses", "image" => "foto/seni.png"],
        "Development" => ["courses" => "38 Courses", "image" => "foto/development.png"],
        "Communication" => ["courses" => "38 Courses", "image" => "foto/communication.png"],
        "Videography" => ["courses" => "38 Courses", "image" => "foto/film.png"],
        "Photography" => ["courses" => "38 Courses", "image" => "foto/videography.png"],
        "Marketing" => ["courses" => "38 Courses", "image" => "foto/marketing.png"],
        "Content Writing" => ["courses" => "38 Courses", "image" => "foto/writing.png"],
        "Finance" => ["courses" => "38 Courses", "image" => "foto/finance.png"],
        "Science" => ["courses" => "38 Courses", "image" => "foto/science.png"],
        "Network" => ["courses" => "38 Courses", "image" => "foto/network.png"]
    ];
    
    foreach ($categories as $name => $data) {
        echo "
        <div class='category-card'>
            <div class='category-icon'>
                <img src='{$data['image']}' alt='$name'>
            </div>
            <h3>$name</h3>
            <p>{$data['courses']}</p>
        </div>
        ";
    }
    ?>
</div>

        </div>
    </section>

    <!-- Featured Courses Section -->
    <section>
        <div class="container">
            <div class="section-header">
                <h2>Featured Courses</h2>
                <p>Explore our Popular Courses</p>
            </div>
            <div class="courses-grid">
                <?php
                $courses = [
                    [
                        "category" => "Photography",
                        "title" => "Photosynthesis and LMS website",
                        "instructor" => "DeterminedPoints",
                        "duration" => "2 Weeks",
                        "students" => "156 Students",
                        "price" => "$49.0"
                    ],
                    [
                        "category" => "Photography",
                        "title" => "Design A Website With ThimPress",
                        "instructor" => "DeterminedPoints",
                        "duration" => "2 Weeks",
                        "students" => "156 Students",
                        "price" => "Free"
                    ],
                    [
                        "category" => "Photography",
                        "title" => "Create An LMS Website With LearnPress",
                        "instructor" => "DeterminedPoints",
                        "duration" => "2 Weeks",
                        "students" => "156 Students",
                        "price" => "Free"
                    ],
                    [
                        "category" => "Photography",
                        "title" => "Create An LMS Website With LearnPress",
                        "instructor" => "DeterminedPoints",
                        "duration" => "2 Weeks",
                        "students" => "156 Students",
                        "price" => "Free"
                    ],
                    [
                        "category" => "Photography",
                        "title" => "Create An LMS Website With LearnPress",
                        "instructor" => "DeterminedPoints",
                        "duration" => "2 Weeks",
                        "students" => "156 Students",
                        "price" => "Free"
                    ],
                    [
                        "category" => "Photography",
                        "title" => "Create An LMS Website With LearnPress",
                        "instructor" => "DeterminedPoints",
                        "duration" => "2 Weeks",
                        "students" => "156 Students",
                        "price" => "Free"
                    ]
                ];
                
                foreach ($courses as $course) {
                    $priceClass = ($course['price'] == 'Free') ? 'price-free' : '';
                    
                    echo "
                    <div class='course-card'>
                        <div class='course-image'>
                            Course Image
                        </div>
                        <div class='course-content'>
                            <div class='course-category'>{$course['category']}</div>
                            <h3 class='course-title'>{$course['title']}</h3>
                            <div class='course-instructor'>
                                <div class='instructor-avatar'></div>
                                <div class='instructor-name'>{$course['instructor']}</div>
                            </div>
                            <div class='course-meta'>
                                <span>{$course['duration']}</span>
                                <span>{$course['students']}</span>
                            </div>
                            <div class='course-price'>
                                <div class='price $priceClass'>{$course['price']}</div>
                                <a href='#' class='view-more'>View More</a>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>25K+</h3>
                    <p>Active Students</p>
                </div>
                <div class="stat-item">
                    <h3>899</h3>
                    <p>Total Courses</p>
                </div>
                <div class="stat-item">
                    <h3>158</h3>
                    <p>Instructor</p>
                </div>
                <div class="stat-item">
                    <h3>100%</h3>
                    <p>Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section>
        <div class="container">
            <div class="features">
                <div class="features-content">
                    <h2>Grow Us Your Skill With LearnPress LMS</h2>
                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized that cannot trouble.</p>
                    <ul class="features-list">
                        <li>Certification</li>
                        <li>Certification</li>
                        <li>Certification</li>
                        <li>Certification</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Explore Course</a>
                </div>
                <div class="features-image">
                    LearnPress Add-Ons
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>Student Feedbacks</h2>
                <p>What Students Say About Academy LMS</p>
            </div>
            <div class="testimonials-grid">
                <?php
                for ($i = 0; $i < 4; $i++) {
                    echo "
                    <div class='testimonial-card'>
                        <p class='testimonial-text'>I must explain to you how all this mistaken . Tdea of denouncing pleasure and praising pain was born and I will give you a complete account of the system and expound!</p>
                        <div class='testimonial-author'>
                            <div class='author-avatar'></div>
                            <div class='author-info'>
                                <h4>Roe Smith</h4>
                                <p>Designer</p>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Let's Start With Academy LMS</h2>
            <div class="cta-buttons">
                <a href="#" class="btn btn-outline">Join As A Student</a>
                <a href="#" class="btn btn-primary">Become An Instructor</a>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section>
        <div class="container">
            <div class="section-header">
                <h2>Latest Articles</h2>
                <p>Explore our Free Articles</p>
            </div>
            <div class="blog-grid">
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo "
                    <div class='blog-card'>
                        <div class='blog-image'>
                            Blog Image
                        </div>
                        <div class='blog-content'>
                            <div class='blog-date'>Jun 24, 2023</div>
                            <h3 class='blog-title'>Best LearnPress WordPress Theme Collection For 2023</h3>
                            <p class='blog-excerpt'>Looking for an amazing & well-functional LearnPress WordPress Theme?...</p>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>GET HELP</h3>
                    <ul class="footer-links">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Latest Articles</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>PROGRAMS</h3>
                    <ul class="footer-links">
                        <li><a href="#">Art & Design</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">IT & Software</a></li>
                        <li><a href="#">Languages</a></li>
                        <li><a href="#">Programming</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>CONTACT US</h3>
                    <div class="contact-info">
                        <p>Address: 2321 New Design Sir, Lorem Ipsum10<br>Hudson Yards, USA</p>
                        <p>Tel.: + (123) 2500-567-8988</p>
                        <p>Mail: supportmail@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="copyright">
                Copyright © 2024 LearnPress LMS | Powered by ThinkPress
            </div>
        </div>
    </footer>
</body>
</html>