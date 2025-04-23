axios.get("http://mysofa.ct.ws/welcome.php")
  .then(function (response) {
    document.getElementById("message").textContent = response.data.message;
  })
  .catch(function (error) {
    console.error("Erreur lors de l’appel à l’API :", error);
  });
