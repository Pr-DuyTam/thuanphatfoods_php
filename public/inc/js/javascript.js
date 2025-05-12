const btn = document.getElementById("btn-back-to-top");

window.onscroll = function () {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    btn.style.display = "block";
  } else {
    btn.style.display = "none";
  }
};

btn.addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

const btnToTop = document.getElementById("btn-back-to-top");

window.onscroll = function () {
  if (document.documentElement.scrollTop > 100) {
    btnToTop.style.display = "flex";
  } else {
    btnToTop.style.display = "none";
  }
};

btnToTop.addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

let lastScrollTop = 0; // Biến lưu vị trí cuộn cuối cùng
const navbar = document.querySelector(".navbar");

// logo showcase
const slider = document.querySelector(".logo-slider");
const logos = document.querySelectorAll(".logo-item");
const arrowLeft = document.querySelector(".prev");
const arrowRight = document.querySelector(".next");

let currentIndex = 0;
const visibleLogos = 5;
const totalLogos = logos.length;

function updateSlider() {
  const logoWidth = logos[0].offsetWidth;
  const offset = -currentIndex * logoWidth;
  slider.style.transform = `translateX(${offset}px)`;

  // Ẩn/hiện mũi tên
  arrowLeft.disabled = currentIndex === 0;
  arrowRight.disabled = currentIndex >= totalLogos - visibleLogos;
}
arrowRight.addEventListener("click", () => {
  if (currentIndex < totalLogos - visibleLogos) {
    currentIndex++;
    updateSlider();
  }
});

arrowLeft.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateSlider();
  }
});

// Tự động tính toán kích thước khi resize window
window.addEventListener("resize", updateSlider);
updateSlider(); // Khởi tạo ban đầu
// Thêm sự kiện cuộn trang
window.addEventListener("scroll", function () {
  // Dùng requestAnimationFrame để tối ưu hiệu suất
  window.requestAnimationFrame(() => {
    handleNavbarScroll();
  });
});

function handleNavbarScroll() {
  const scrollTop = window.scrollY || document.documentElement.scrollTop;

  if (scrollTop > 50) {
    navbar.classList.add("scrolled"); // Thêm lớp scrolled khi cuộn xuống
  } else {
    navbar.classList.remove("scrolled"); // Xóa lớp scrolled khi quay lại trên cùng
  }
}

// Thêm vào file JS của bạn
function handleScrollAnimation() {
  const elements = document.querySelectorAll(".reveal");
  const scrollPosition = window.pageYOffset;
  const windowHeight = window.innerHeight;

  elements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top + scrollPosition;
    const elementBottom = elementTop + element.offsetHeight;

    // Check cả 2 chiều scroll
    if (
      elementTop < scrollPosition + windowHeight * 0.75 &&
      elementBottom > scrollPosition
    ) {
      element.classList.add("visible");
    } else {
      element.classList.remove("visible");
    }
  });
}

// Sử dụng Intersection Observer cho mượt hơn
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      } else {
        entry.target.classList.remove("visible");
      }
    });
  },
  {
    threshold: 0.05,
    rootMargin: "0px 0px -50px 0px",
  }
);

document.querySelectorAll(".reveal").forEach((element) => {
  observer.observe(element);
});

// Thêm event listener
window.addEventListener("scroll", handleScrollAnimation);
window.addEventListener("resize", handleScrollAnimation);
window.addEventListener("load", handleScrollAnimation);

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.getElementById("logoSlider");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  const items = document.querySelectorAll(".logo-item");

  // Số lượng logo tổng cộng
  const totalLogos = items.length;

  // Index hiện tại
  let currentIndex = 0;

  // Biến để lưu số logo hiển thị (sẽ được thiết lập dựa trên kích thước màn hình)
  let visibleLogos = 3;
  let logoStep = 1; // Di chuyển 1 logo mỗi lần click (giống nhau cho cả desktop và mobile)

  // Hàm kiểm tra kích thước màn hình và cập nhật số logo hiển thị
  function checkScreenSize() {
    if (window.innerWidth >= 992) {
      // Desktop: hiển thị 5 logo
      visibleLogos = 5;
    } else {
      // Mobile: hiển thị 3 logo
      visibleLogos = 3;
    }
    // logoStep luôn là 1 cho cả desktop và mobile

    // Cập nhật slider sau khi thay đổi số lượng hiển thị
    moveSlider(0); // Đặt lại vị trí về đầu khi thay đổi chế độ xem
    updateButtons();
  }

  // Cập nhật trạng thái nút
  function updateButtons() {
    prevBtn.disabled = currentIndex <= 0;
    nextBtn.disabled = currentIndex >= totalLogos - visibleLogos;
  }

  // Di chuyển slider
  function moveSlider(direction = 0) {
    // Cập nhật currentIndex nếu có direction
    if (direction !== 0) {
      currentIndex += direction * logoStep;
    }

    // Đảm bảo không vượt quá giới hạn
    if (currentIndex < 0) currentIndex = 0;
    if (currentIndex > totalLogos - visibleLogos) {
      currentIndex = totalLogos - visibleLogos;
    }

    // Tính toán tỷ lệ phần trăm để di chuyển
    const slideWidth = 100 / visibleLogos;
    const translateValue = -currentIndex * slideWidth;

    // Áp dụng transform
    slider.style.transform = `translateX(${translateValue}%)`;

    // Cập nhật trạng thái nút
    updateButtons();
  }

  // Xử lý khi nhấn nút previous
  prevBtn.addEventListener("click", function () {
    if (currentIndex > 0) {
      moveSlider(-1);
    }
  });

  // Xử lý khi nhấn nút next
  nextBtn.addEventListener("click", function () {
    if (currentIndex < totalLogos - visibleLogos) {
      moveSlider(1);
    }
  });

  // Theo dõi thay đổi kích thước màn hình
  window.addEventListener("resize", function () {
    checkScreenSize();
  });

  // Khởi tạo slider
  checkScreenSize(); // Thiết lập số logo hiển thị ban đầu dựa trên kích thước màn hình
});

document.querySelectorAll(".menu-item").forEach((item) => {
  item.addEventListener("click", function (e) {
    e.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>
    // Đóng tất cả các danh mục con khác
    document.querySelectorAll(".menu-item").forEach((otherItem) => {
      if (otherItem !== this) {
        otherItem.classList.remove("active");
      }
    });

    // Mở/đóng danh mục con của mục được click
    this.classList.toggle("active");
  });
});

// Thêm hiệu ứng cho các mục trong dropdown
document.querySelectorAll(".dropdown-item").forEach((item) => {
  item.addEventListener("mousedown", function () {
    this.style.backgroundColor = "#d0d0d0"; // Hiệu ứng màu nền khi click
    this.style.color = "#007bff"; // Hiệu ứng màu chữ khi click

    setTimeout(() => {
      this.style.backgroundColor = ""; // Trở lại màu gốc
      this.style.color = ""; // Trở lại màu chữ gốc
    }, 600); // Hiệu ứng kéo dài 600ms trước khi trở lại bình thường
  });
});

// Thêm sự kiện click bấm kì nơi nào thì đóng menu toggle
document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.getElementById('menu__toggle');
  const menuBox = document.querySelector('.menu__box');
  const hamburgerMenu = document.querySelector('.hamburger-menu'); // Container bao ngoài checkbox, label và menu

  // Lắng nghe sự kiện click trên toàn bộ document
  document.addEventListener('click', function(event) {
      const isClickInsideHamburger = hamburgerMenu.contains(event.target);
      const isMenuOpen = menuToggle.checked; // Kiểm tra trạng thái của checkbox

      // Nếu menu đang mở và click xảy ra bên ngoài hamburger menu container, đóng menu
      if (isMenuOpen && !isClickInsideHamburger) {
          menuToggle.checked = false; // Bỏ chọn checkbox để đóng menu
      }
  });
});

document.querySelectorAll('h5.truncate-3-words').forEach(element => {
  const words = element.textContent.split(' ');
  if(words.length > 3) {
      element.textContent = words.slice(0, 3).join(' ') + '...';
  }
});

const slide = document.querySelector(".logo-slider"); // Đảm bảo chọn đúng phần tử

slider.addEventListener("touchstart", (event) => {
  const startX = event.touches[0].pageX;

  const onTouchMove = (moveEvent) => {
    const moveX = moveEvent.touches[0].pageX;
    slider.scrollLeft -= moveX - startX;
  };

  slider.addEventListener("touchmove", onTouchMove);

  slider.addEventListener("touchend", () => {
    slider.removeEventListener("touchmove", onTouchMove);
  });
});
