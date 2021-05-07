function refreshAos() {
  onElementHeightChange(document.body, function () {
    AOS.refresh();
  });
  AOS.init({
    duration: 600,
    anchorPlacement: "top-top",
    once: false,
  });
}
