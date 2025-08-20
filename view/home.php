   <!-- Banner/Hero -->
    <div class="hero text-center mb-5">
      <div class="hero-title mb-2">Cửa hàng Công nghệ Uy tín</div>
      <div class="hero-desc">Nơi bạn tìm thấy điện thoại, laptop, phụ kiện chất lượng và dịch vụ tốt nhất.<br />Khuyến
        mãi hấp dẫn mỗi ngày!</div>
      <a href="products.html" class="btn btn-warning cta-btn shadow-sm">Khám phá ngay</a>
    </div>
    <!-- Danh mục nổi bật -->
    <div class="mb-5">
      <div class="section-title">Danh mục nổi bật</div>
      <div class="row g-3">
        <?php foreach($dm as $item){ ?>
        <div class="col-6 col-md-3">
          <a href="products.php?id=<?= $item["id"]; ?>" class="category-card d-block h-100">
            <div class="category-icon"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                <path
                  d="M11 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h6zm1 2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V3z" />
                <path d="M8 12.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
              </svg></div>
            <div><?= $item["ten"] ?></div>
          </a>
        </div>
        <?php } ?>
      </div>
    </div>
    <!-- Sản phẩm mới -->
    <div class="mb-5">
      <div class="section-title">Sản phẩm mới</div>
      <div class="row">
        <div class="col-lg-3 col-md-4 col-6">
          <div class="product-card h-100 d-flex flex-column">
            <img src="https://picsum.photos/seed/1/300/180" alt="iPhone 15 Pro" class="product-img" />
            <div class="product-title">iPhone 15 Pro</div>
            <div class="product-category">Smartphone</div>
            <div class="my-2">Quantity: 12</div>
            <a href="product-detail.html?id=1" class="btn btn-outline-primary mb-2 w-100">Xem chi tiết</a>
            <a href="cart.html?add=1" class="btn btn-warning add-cart-btn w-100">Thêm vào giỏ</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <div class="product-card h-100 d-flex flex-column">
            <img src="https://picsum.photos/seed/2/300/180" alt="MacBook Air M2" class="product-img" />
            <div class="product-title">MacBook Air M2</div>
            <div class="product-category">Laptop</div>
            <div class="my-2">Quantity: 7</div>
            <a href="product-detail.html?id=2" class="btn btn-outline-primary mb-2 w-100">Xem chi tiết</a>
            <a href="cart.html?add=2" class="btn btn-warning add-cart-btn w-100">Thêm vào giỏ</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <div class="product-card h-100 d-flex flex-column">
            <img src="https://picsum.photos/seed/3/300/180" alt="Apple Watch Series 9" class="product-img" />
            <div class="product-title">Apple Watch Series 9</div>
            <div class="product-category">Wearable</div>
            <div class="my-2">Quantity: 20</div>
            <a href="product-detail.html?id=3" class="btn btn-outline-primary mb-2 w-100">Xem chi tiết</a>
            <a href="cart.html?add=3" class="btn btn-warning add-cart-btn w-100">Thêm vào giỏ</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
          <div class="product-card h-100 d-flex flex-column">
            <img src="https://picsum.photos/seed/4/300/180" alt="AirPods Pro" class="product-img" />
            <div class="product-title">AirPods Pro</div>
            <div class="product-category">Phụ kiện</div>
            <div class="my-2">Quantity: 15</div>
            <a href="product-detail.html?id=4" class="btn btn-outline-primary mb-2 w-100">Xem chi tiết</a>
            <a href="cart.html?add=4" class="btn btn-warning add-cart-btn w-100">Thêm vào giỏ</a>
          </div>
        </div>
      </div>
    </div>
    <!-- CTA -->
    <div class="text-center mb-5">
      <h3 class="mb-3" style="font-family: 'Playfair Display', serif;">Nhận thông tin khuyến mãi mới nhất</h3>
      <form class="d-flex justify-content-center flex-wrap gap-2" style="max-width:420px; margin:auto;">
        <input type="email" class="form-control" placeholder="Nhập email của bạn" required>
        <button class="btn btn-primary px-4" type="submit">Đăng ký</button>
      </form>
    </div>
 