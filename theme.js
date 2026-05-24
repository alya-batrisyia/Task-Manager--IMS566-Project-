document.addEventListener("DOMContentLoaded", function () {

    const toggleBtn = document.getElementById("themeToggle");

    // APPLY THEME ON LOAD
    const savedTheme = localStorage.getItem("theme");

    if (savedTheme === "dark") {
        document.body.classList.add("dark-mode");
        if (toggleBtn) toggleBtn.innerHTML = "☀️";
    }

    // TOGGLE BUTTON (SAFE CHECK)
    if (toggleBtn) {

        toggleBtn.addEventListener("click", function () {

            document.body.classList.toggle("dark-mode");

            if (document.body.classList.contains("dark-mode")) {
                localStorage.setItem("theme", "dark");
                toggleBtn.innerHTML = "☀️";
            } else {
                localStorage.setItem("theme", "light");
                toggleBtn.innerHTML = "🌙";
            }

        });
    }

});