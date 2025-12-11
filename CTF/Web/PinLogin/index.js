// IsAdmin
const isAdmin = localStorage.getItem("isAdmin");
const last_Flag = document.getElementById("lflag-result");

// Control
if (isAdmin) {
    last_Flag.textContent = "FLAG: {SQLInjection4158_CokGizli1234}";
}

// OnClick
const login_button = document.getElementById("submit-button");

// Create Listener
login_button.addEventListener("click", function() {
    localStorage.clear();
})