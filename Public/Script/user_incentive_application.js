function toggleOthersNegeri() {
  var dropdown = document.getElementById("negeri");
  var othersNegeriLabel = document.getElementById("others_negeri_label");
  var othersNegeriInput = document.getElementById("others_negeri");

  if (dropdown.value === "Others") {
    othersNegeriLabel.style.display = "block";
    othersNegeriInput.style.display = "block";
    othersNegeriInput.value = ""; // Clear the input value when "Others" is selected
  } else {
    othersNegeriLabel.style.display = "none";
    othersNegeriInput.style.display = "none";
    othersNegeriInput.value = dropdown.value; // Set the input value same as the selected option
  }
}