<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clean Energy Hub</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #ecfdf5, #e0f2fe);
        }

        /* ================= NAVBAR ================= */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background: white;
        }

        .logo {
            font-weight: bold;
            color: #15803d;
        }

        .right-menu {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links div {
            cursor: pointer;
        }

        .nav-links div:hover {
            color: #16a34a;
        }

        .auth button {
            margin-left: 10px;
            padding: 8px 15px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: #22c55e;
            color: white;
        }

        .btn-outline {
            border: 1px solid #22c55e;
            background: transparent;
            color: #22c55e;
        }

        /* ================= HERO ================= */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 60px 50px;
            gap: 40px;
        }

        .hero-text {
            max-width: 600px;
            font-size: 18px;
        }

        .badge {
            background: #dcfce7;
            color: #16a34a;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            display: inline-block;
        }

        .hero-text h1 {
            font-size: 55px;
            margin: 20px 0;
        }

        .hero-text span {
            color: #16a34a;
        }

        .hero-text p {
            color: #555;
        }

        .actions button {
            margin-top: 20px;
            margin-right: 10px;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        .stats {
            display: flex;
            gap: 40px;
            margin-top: 30px;
        }

        .stats h2 {
            color: #16a34a;
        }

        .hero img {
            width: 500px;
            max-width: 100%;
            border-radius: 20px;
        }

        /* ================= RESPONSIVE ================= */

        /* Tablet */
        @media (max-width: 1024px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .stats {
                justify-content: center;
            }
        }

        /* Mobile */
        @media (max-width: 768px) {

            .navbar {
                flex-direction: column;
                gap: 10px;
                padding: 20px;
            }

            .right-menu {
                flex-direction: column;
                gap: 10px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero {
                padding: 30px 20px;
            }

            .hero-text h1 {
                font-size: 28px;
            }

            .actions button {
                width: 100%;
                margin-bottom: 10px;
            }

            .stats {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
        }

    </style>

</head>
<body>

<!-- ================= NAVBAR ================= -->
<div class="navbar">

    <!-- Logo -->
    <div class="logo">🌿 Clean Energy Hub</div>

    <!-- Right Menu -->
    <div class="right-menu">

        <div class="nav-links">
            <div>Home</div>
            <div>Solutions</div>
            <div>Partners</div>
            <div>Articles</div>
        </div>

        <div class="auth">
            <button>Login</button>
            <button class="btn-primary">Register</button>
        </div>

    </div>

</div>

<!-- ================= HERO ================= -->
<div class="hero">

    <!-- Left -->
    <div class="hero-text">
        <div class="badge">🌱 Sustainable Energy Solutions</div>

        <h1>
            Power Your Business <br>
            <span>with Clean Energy</span>
        </h1>

        <p>
            Discover renewable energy solutions tailored for your business.
            Save costs, reduce emissions, and build a sustainable future.
        </p>

        <div class="actions">
            <button class="btn-primary">Get Started →</button>
            <button class="btn-outline">Browse Solutions</button>
        </div>

        <div class="stats">
            <div>
                <h2>500+</h2>
                <p>Businesses Served</p>
            </div>
            <div>
                <h2>45%</h2>
                <p>Avg. Cost Savings</p>
            </div>
            <div>
                <h2>2.5K</h2>
                <p>Tons CO₂ Reduced</p>
            </div>
        </div>
    </div>

    <!-- Right -->
    <div>
        <img src="/img/solar-panel.jpg">
    </div>

</div>

</body>
</html>