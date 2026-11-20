document.addEventListener("DOMContentLoaded", () => {

  /* ================================
    FAQ 開閉処理
  ================================== */
  const faqButtons = document.querySelectorAll(".faq-l-question");

  faqButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const item = btn.closest(".faq-l-item");
      const isActive = item.classList.contains("active");

      document.querySelectorAll(".faq-l-item").forEach((i) => {
        i.classList.remove("active");
      });

      if (!isActive) {
        item.classList.add("active");
      }
    });
  });


  /* ================================
    ページトップへ戻るボタン
  ================================== */
  const backToTop = document.querySelector(".back-to-top");

  if (backToTop) {
    window.addEventListener("scroll", () => {
      const scrollPosition = window.scrollY + window.innerHeight;
      const pageHeight = document.documentElement.scrollHeight;

      if (scrollPosition >= pageHeight - 10) {
        backToTop.classList.add("is-visible");
      } else {
        backToTop.classList.remove("is-visible");
      }
    });

    backToTop.addEventListener("click", (e) => {
      e.preventDefault();

      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });

      backToTop.classList.remove("is-visible");

      setTimeout(() => {
        if (window.scrollY === 0) {
          backToTop.classList.remove("is-visible");
        }
      }, 800);
    });
  }


  /* ================================
    ページ更新時はトップに戻す
  ================================== */
  window.history.scrollRestoration = "manual";
  window.scrollTo(0, 0);

});
