  // Toasts primary alert
  function toastPrimaryAlert() {
    halfmoon.initStickyAlert({
      content: "This is a primary alert without a close button, that will stay up for 10 seconds.",
      title: "Primary alert",
      alertType: "alert-primary",
      hasDismissButton: false,
      timeShown: 10000
    });
  }
  
  // Toasts success alert
  function toastSuccessAlert() {
    halfmoon.initStickyAlert({
      content: "This is a success alert that will be filled only in light mode.",
      title: "Success alert",
      alertType: "alert-success",
      fillType: "filled-lm"
    });
  }
  
  // Toasts secondary alert
  function toastSecondaryAlert() {
    halfmoon.initStickyAlert({
      content: "This is a secondary alert that will be filled only in dark mode.",
      title: "Secondary alert",
      alertType: "alert-secondary",
      fillType: "filled-dm"
    });
  }
  
  // Toasts danger alert
  function toastDangerAlert() {
    halfmoon.initStickyAlert({
      content: "This is a danger alert that will be always filled.",
      title: "Danger alert",
      alertType: "alert-danger",
      fillType: "filled"
    });
  }

  url = new URL(window.location.href);

if (url.searchParams.get('error')) {
  toastDangerAlert();
}