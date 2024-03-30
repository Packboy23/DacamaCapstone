toastr.options = {
  closeButton: true,
  debug: true,
  newestOnTop: true,
  progressBar: true,
  positionClass: "toast-top-right",
  preventDuplicates: false,
  onclick: null,
  showDuration: "300",
  hideDuration: "1000",
  timeOut: "3000",
  extendedTimeOut: "1000",
  showEasing: "swing",
  hideEasing: "linear",
  showMethod: "fadeIn",
  hideMethod: "fadeOut",
};

$("#loginBtn").on("click", function (event) {
  event.preventDefault();

  const username = $('[name="username"]').val();
  const password = $('[name="password"]').val();

  $.ajax({
    url: "_loginvalidation.php", // Replace with your server-side script URL
    method: "POST",
    data: { username, password },
    success: function (response) {
      if (response === "failed") {
        // Redirect to a logged-in page or perform other actions
        toastr.error("Invalid username or password");
      } else if (response === "dashboard_teacher") {
        window.location.href = "/acam/dashboard_teacher.php";
      } else if (response === "dashboard") {
        window.location.href = "/acam/dashboard.php";
      } else if (response === "dashboard_super.php") {
        window.location.href = "/acam/dashboard_super.php";  
      } else {
        //toastr.error("UNAUTHORIZE ERROR");
      }
    },
    error: function () {
      toastr.error("An error occurred while logging in");
    },
  });
});

$("#loginBtn").on("click", function (event) {
  // Check for empty fields
  let emptyField = null; // Variable to store the first empty field

  if ($('[name="username"]').val() === "") {
    emptyField = "username";
    toastr.error("Username Required!");
  } else if ($('[name="password"]').val() === "") {
    emptyField = "password";
    toastr.error("Password Required!");
  }

  if (emptyField) {
    // Use onShown to prevent the scroll for this specific message
    toastr.options.onShown = function () {
      toastr.options.onShown = null; // Remove the custom callback
    };
    event.preventDefault(); // Prevent form submission
  }
});

function login_validation(username, password) {
  // Reset toastr options to avoid duplication in each if block
  toastr.options = {
    closeButton: true,
    debug: true,
    newestOnTop: true,
    progressBar: true,
    positionClass: "toast-top-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "3000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  };

  if (username === "") {
    toastr.error("Username Required!");
    return false;
  }

  if (password === "") {
    toastr.error("Password Required!");
    return false;
  }

  return true;
}
