document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');

  if (hamburger) {
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('open');
    });

    document.addEventListener('click', (e) => {
      if (!hamburger.contains(e.target) && !navLinks.contains(e.target)) {
        navLinks.classList.remove('open');
      }
    });
  }

  // Set active nav link
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links a').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('active');
    }
  });
});

function getHeader() {
  return `
  <header>
    <div class="nav-container">
      <a href="index.html" class="logo">Ecom<span>Web</span></a>
      <nav class="nav-links">
        <a href="index.html">Home</a>
        <a href="products.html">Products</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
        <a href="cart.html" class="cart-icon">
          &#128722;
          <span class="cart-count" style="display:none">0</span>
        </a>
      </nav>
      <button class="hamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>`;
}

function getFooter() {
  return `
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <h3>EcomWeb</h3>
          <p>Your one-stop shop for quality products at great prices. We deliver happiness to your doorstep.</p>
        </div>
        <div class="footer-col">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Categories</h3>
          <ul>
            <li><a href="products.html?cat=electronics">Electronics</a></li>
            <li><a href="products.html?cat=fashion">Fashion</a></li>
            <li><a href="products.html?cat=home">Home & Living</a></li>
            <li><a href="products.html?cat=sports">Sports</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Support</h3>
          <ul>
            <li><a href="contact.html">Help Center</a></li>
            <li><a href="#">Shipping Info</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; ${new Date().getFullYear()} EcomWeb. All rights reserved.</p>
      </div>
    </div>
  </footer>`;
}

function createProductCard(product) {
  const badge = product.badge ? `<span class="product-badge">${product.badge}</span>` : '';
  const originalPrice = product.originalPrice
    ? `<span class="original-price">$${product.originalPrice.toFixed(2)}</span>`
    : '';

  return `
  <div class="product-card">
    <a href="product-detail.html?id=${product.id}">
      <div class="product-image">
        ${badge}
        <img src="${product.image}" alt="${product.name}" loading="lazy">
      </div>
    </a>
    <div class="product-info">
      <h3><a href="product-detail.html?id=${product.id}">${product.name}</a></h3>
      <div class="rating">${renderStars(product.rating)} (${product.reviews})</div>
      <div class="price">$${product.price.toFixed(2)} ${originalPrice}</div>
      <button class="btn-add-cart" onclick="cart.addItem(products.find(p=>p.id===${product.id}))">
        Add to Cart
      </button>
    </div>
  </div>`;
}
