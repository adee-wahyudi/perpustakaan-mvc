var btnLogin = document.getElementById("btnLogin");

function alertMessage(message, type) {
  var errorMessages = document.getElementById("errorMessages");
  var wrapper = document.createElement("div");
  wrapper.innerHTML =
    '<div class="alert alert-' + type + ' alert-dismissible" role="alert"><i class="bi bi-exclamation-triangle-fill"></i> ' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

  errorMessages.append(wrapper);
}

if (btnLogin) {
  btnLogin.addEventListener("click", function () {
    var email = document.getElementById("floatingInput").value;
    var password = document.getElementById("floatingPassword").value;
    if (email == "admin@perpus.com" && password == "admin123") {
      Swal.fire("Anda berhasil login!", "Selamat datang kembali Admin", "success");
    } else {
      alertMessage("Email atau Password salah!", "danger");
    }
  });
}
