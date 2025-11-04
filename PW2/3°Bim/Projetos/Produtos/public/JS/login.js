document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("loginForm");

  document.addEventListener("keydown", function (event) {
    if (event.key === "Enter" || event.keyCode === 13) {
      event.preventDefault();
      form.submit();
    }
  });
});
