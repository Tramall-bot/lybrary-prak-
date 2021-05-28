document.getElementById("reviewForm").addEventListener("submit", (event) => {
  const date = new Date();
  document.getElementById("date").value =
    date.getHours() +
    ":" +
    date.getMinutes() +
    ", " +
    date.getDate() +
    "." +
    (date.getMonth() + 1) +
    "." +
    date.getFullYear();
});
