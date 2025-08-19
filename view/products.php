   <div class="row">
      <!-- Sidebar category -->
      <aside class="col-lg-3 sidebar">
        <div class="sidebar-title">Danh mục sản phẩm</div>
        <ul class="category-list" id="categoryList">
          <li><a href="#" class="active" data-category="all">Tất cả</a></li>
          <li><a href="#" data-category="Smartphone">Smartphone</a></li>
          <li><a href="#" data-category="Laptop">Laptop</a></li>
          <li><a href="#" data-category="Wearables">Wearables</a></li>
          <li><a href="#" data-category="Phụ kiện">Phụ kiện</a></li>
        </ul>
      </aside>
      <!-- Product grid -->
      <div class="col-lg-9">
        <div class="product-list">
          <div class="row filter-row align-items-center mb-3">
            <div class="col-sm-6">
              <h2 style="font-family: 'Playfair Display', serif;" class="mb-0 fs-4">Sản phẩm mới nhất</h2>
            </div>
            <div class="col-sm-6 text-sm-end mt-2 mt-sm-0">
              <input type="text" class="form-control" id="searchInput" style="max-width: 320px; display: inline-block;" placeholder="Tìm kiếm sản phẩm..." />
            </div>
          </div>
          <div class="row" id="productGrid">
            <!-- Sản phẩm -->
            <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="Smartphone" data-title="iphone 15 pro">
              <div class="product-card h-100 d-flex flex-column">
                <img src="https://picsum.photos/seed/1/300/180" alt="iPhone 15 Pro" class="product-img" />
                <div class="product-title">iPhone 15 Pro</div>
                <div class="product-category">Smartphone</div>
                <div class="my-2">Quantity: 12</div>
                <div class="product-actions mt-auto">
                  <a href="cart.html?add=1" class="btn btn-warning add-cart-btn w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-plus mb-1 me-1" viewBox="0 0 16 16"><path d="M8 7v3.5a.5.5 0 0 0 1 0V7h1.5a.5.5 0 0 0 0-1H9V4.5a.5.5 0 0 0-1 0V6H6.5a.5.5 0 0 0 0 1H8Zm-4.236 6.496A.5.5 0 0 1 3.5 13h9a.5.5 0 0 1 .491.408l1.5 8A.5.5 0 0 1 14 15.5h-2a.5.5 0 0 1-.491-.408L10.57 13H5.43l-.439 2.092A.5.5 0 0 1 4.5 15.5h-2a.5.5 0 0 1-.491-.408l-1.5-8A.5.5 0 0 1 2 7.5h12a.5.5 0 0 1 .491.408l1.5 8A.5.5 0 0 1 16 15.5h-2a.5.5 0 0 1-.491-.408L13.57 13H2.43l-.439 2.092ZM5 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm6 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg>
                    Add to Cart
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="Laptop" data-title="macbook air m2">
              <div class="product-card h-100 d-flex flex-column">
                <img src="https://picsum.photos/seed/2/300/180" alt="MacBook Air M2" class="product-img" />
                <div class="product-title">MacBook Air M2</div>
                <div class="product-category">Laptop</div>
                <div class="my-2">Quantity: 7</div>
                <div class="product-actions mt-auto">
                  <a href="cart.html?add=2" class="btn btn-warning add-cart-btn w-100"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-plus mb-1 me-1" viewBox="0 0 16 16"><path d="M8 7v3.5a.5.5 0 0 0 1 0V7h1.5a.5.5 0 0 0 0-1H9V4.5a.5.5 0 0 0-1 0V6H6.5a.5.5 0 0 0 0 1H8Zm-4.236 6.496A.5.5 0 0 1 3.5 13h9a.5.5 0 0 1 .491.408l1.5 8A.5.5 0 0 1 14 15.5h-2a.5.5 0 0 1-.491-.408L10.57 13H5.43l-.439 2.092A.5.5 0 0 1 4.5 15.5h-2a.5.5 0 0 1-.491-.408l-1.5-8A.5.5 0 0 1 2 7.5h12a.5.5 0 0 1 .491.408l1.5 8A.5.5 0 0 1 16 15.5h-2a.5.5 0 0 1-.491-.408L13.57 13H2.43l-.439 2.092ZM5 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm6 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg> Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="Wearables" data-title="apple watch series 9">
              <div class="product-card h-100 d-flex flex-column">
                <img src="https://picsum.photos/seed/3/300/180" alt="Apple Watch Series 9" class="product-img" />
                <div class="product-title">Apple Watch Series 9</div>
                <div class="product-category">Wearables</div>
                <div class="my-2">Quantity: 20</div>
                <div class="product-actions mt-auto">
                  <a href="cart.html?add=3" class="btn btn-warning add-cart-btn w-100"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-plus mb-1 me-1" viewBox="0 0 16 16"><path d="M8 7v3.5a.5.5 0 0 0 1 0V7h1.5a.5.5 0 0 0 0-1H9V4.5a.5.5 0 0 0-1 0V6H6.5a.5.5 0 0 0 0 1H8Zm-4.236 6.496A.5.5 0 0 1 3.5 13h9a.5.5 0 0 1 .491.408l1.5 8A.5.5 0 0 1 14 15.5h-2a.5.5 0 0 1-.491-.408L10.57 13H5.43l-.439 2.092A.5.5 0 0 1 4.5 15.5h-2a.5.5 0 0 1-.491-.408l-1.5-8A.5.5 0 0 1 2 7.5h12a.5.5 0 0 1 .491.408l1.5 8A.5.5 0 0 1 16 15.5h-2a.5.5 0 0 1-.491-.408L13.57 13H2.43l-.439 2.092ZM5 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm6 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg> Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 product-item" data-category="Phụ kiện" data-title="airpods pro">
              <div class="product-card h-100 d-flex flex-column">
                <img src="https://picsum.photos/seed/4/300/180" alt="AirPods Pro" class="product-img" />
                <div class="product-title">AirPods Pro</div>
                <div class="product-category">Phụ kiện</div>
                <div class="my-2">Quantity: 15</div>
                <div class="product-actions mt-auto">
                  <a href="cart.html?add=4" class="btn btn-warning add-cart-btn w-100"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart-plus mb-1 me-1" viewBox="0 0 16 16"><path d="M8 7v3.5a.5.5 0 0 0 1 0V7h1.5a.5.5 0 0 0 0-1H9V4.5a.5.5 0 0 0-1 0V6H6.5a.5.5 0 0 0 0 1H8Zm-4.236 6.496A.5.5 0 0 1 3.5 13h9a.5.5 0 0 1 .491.408l1.5 8A.5.5 0 0 1 14 15.5h-2a.5.5 0 0 1-.491-.408L10.57 13H5.43l-.439 2.092A.5.5 0 0 1 4.5 15.5h-2a.5.5 0 0 1-.491-.408l-1.5-8A.5.5 0 0 1 2 7.5h12a.5.5 0 0 1 .491.408l1.5 8A.5.5 0 0 1 16 15.5h-2a.5.5 0 0 1-.491-.408L13.57 13H2.43l-.439 2.092ZM5 16a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm6 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/></svg> Add to Cart</a>
                </div>
              </div>
            </div>
            <!-- Thêm nhiều sản phẩm hơn ở đây nếu muốn -->
          </div>
          <div class="text-center mt-4 d-none" id="noResult">
            <div class="alert alert-warning">Không tìm thấy sản phẩm nào phù hợp.</div>
          </div>
        </div>
      </div>
    </div>