<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Trang chủ | Cửa hàng Công nghệ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Cửa hàng công nghệ: Điện thoại, laptop, phụ kiện chính hãng, khuyến mãi sốc!">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: #f8f9fa;
        }

        .menu {
            background: #fff;
            padding: 1.2rem 1rem;
            border-radius: 1rem;
            margin-bottom: 2rem;
        }

        .menu a {
            font-family: 'Playfair Display', serif;
            margin-right: 1.5rem;
            font-weight: 500;
            color: #0d6efd;
            text-decoration: none;
        }

        .menu a.active,
        .menu a:hover {
            color: #fff;
            background: #0d6efd;
            border-radius: 6px;
            padding: 0.25rem 0.75rem;
        }

        .hero {
            background: linear-gradient(92deg, #4776e6, #8e54e9);
            color: #fff;
            border-radius: 1.2rem;
            padding: 3.5rem 1rem 2.7rem 1rem;
            margin-bottom: 2.2rem;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
        }

        .hero-desc {
            font-size: 1.2rem;
            margin-bottom: 1.7rem;
        }

        .cta-btn {
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 2rem;
            padding: 0.7rem 2.5rem;
        }

        .category-card {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 2px 10px #0001;
            text-align: center;
            padding: 1.5rem 1rem;
            transition: box-shadow .2s;
        }

        .category-card:hover {
            box-shadow: 0 4px 24px #0002;
        }

        .category-icon {
            font-size: 2.3rem;
            margin-bottom: 0.7rem;
            color: #615fbe;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .product-card {
            border-radius: 1rem;
            border: 1px solid #dee2e6;
            background: #fff;
            padding: 1.25rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 8px #0001;
        }

        .product-title {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        .product-category {
            font-size: 0.95rem;
            color: #6c757d;
        }

        .product-img {
            width: 100%;
            height: 180px;
            object-fit: contain;
            background: #f3f3f3;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .add-cart-btn {
            font-weight: 500;
            letter-spacing: 0.04em;
        }

        footer {
            padding: 2rem 0 1rem 0;
            background: #fff;
            border-top: 1px solid #eaeaea;
            text-align: center;
            margin-top: 3rem;
            border-radius: 1rem 1rem 0 0;
        }

        @media (max-width: 991px) {
            .hero-title {
                font-size: 1.5rem;
            }

            .section-title {
                font-size: 1.35rem;
            }

            .category-card {
                padding: 1rem 0.5rem;
            }

            .product-card {
                padding: 0.7rem;
            }
        }
    </style>
</head>

<body>
    <div class="container" style="max-width: 1150px; margin-top: 36px;">
        <!-- Menu -->
        <nav class="menu d-flex align-items-center mb-4">
            <a href="index.php">Trang chủ</a>
            <a href="index.php?pg=products">Sản phẩm</a>
        </nav>