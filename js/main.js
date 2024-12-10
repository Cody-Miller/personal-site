// Dark mode button :)
document.addEventListener("DOMContentLoaded", () => {
    const toggleButton = document.getElementById("darkModeToggle");
    const body = document.body;

    // Check for saved user preference in cookies
    const darkModePreference = getCookie("dark-mode");

    // Determine the initial mode based on user preference or system preference
    if (
        darkModePreference === "enabled"
        || (
            darkModePreference === ""
            && window.matchMedia("(prefers-color-scheme: dark)").matches
        )
    ) {
        body.classList.add("dark-mode");
        toggleButton.checked = true;
    }

    toggleButton.addEventListener("change", () => {
        body.classList.toggle("dark-mode");
        // Save user preference in cookies
        if (body.classList.contains("dark-mode")) {
            setCookie("dark-mode", "enabled", 30); // Expires in 30 days
        } else {
            setCookie("dark-mode", "disabled", 30); // Expires in 30 days
        }
    });
});

// Utility functions for handling cookies
function setCookie(name, value, days) {
    const expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie =
        name +
        "=" +
        encodeURIComponent(value) +
        "; expires=" +
        expires +
        "; path=/";
}

function getCookie(name) {
    return document.cookie.split("; ").reduce((r, v) => {
        const parts = v.split("=");
        return parts[0] === name ? decodeURIComponent(parts[1]) : r;
    }, "");
}