const form = document.querySelector("form");
const container = document.querySelector("#daftar");
const body = document.body;

//dark mode di navbar
const nav = document.querySelector(".nav-inner");
const darkBtn = document.createElement("button");
darkBtn.textContent = "🌙 Dark Mode";
darkBtn.classList.add("btn", "btn-outline");
nav.appendChild(darkBtn);

darkBtn.addEventListener("click", () => {
  body.classList.toggle("dark-mode");
  darkBtn.textContent = body.classList.contains("dark-mode")
    ? "☀️ Light Mode"
    : "🌙 Dark Mode";
});

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const nama = document.getElementById("nama").value;
  const kegiatan = document.getElementById("aktivitas").selectedOptions[0].text;

  const msg = document.createElement("div");
  msg.className = "card shadow-sm";
  msg.style.marginTop = "1rem";
  msg.innerHTML = `
    <h3>Terima Kasih, ${nama}!</h3>
    <p>Pendaftaran untuk kegiatan <strong>${kegiatan}</strong> berhasil dikirim 🎉</p>
  `;

  container.appendChild(msg);

  // Reset form
  form.reset();
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function(e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href"))
      .scrollIntoView({ behavior: "smooth" });
  });
});

// event click pada tombol login
const loginBtn = document.getElementById("login-btn");

loginBtn.addEventListener("click", (e) => {
  e.preventDefault(); // 
  alert("🔒 Fitur login masih dalam proses pengembangan. Tunggu update berikutnya!");
});



