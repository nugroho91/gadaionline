document.addEventListener("DOMContentLoaded", function() {
    const showModalBtn = document.getElementById("showModalBtn");
    const modal = document.getElementById("myModal");
    const closeModal = document.querySelector(".close");
    const saveDataBtn = document.getElementById("saveDataBtn");
    const dataInput = document.getElementById("dataInput");
    
    showModalBtn.addEventListener("click", function() {
      modal.style.display = "block";
    });
    
    closeModal.addEventListener("click", function() {
      modal.style.display = "none";
    });
    
    window.addEventListener("click", function(event) {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
    
    saveDataBtn.addEventListener("click", function() {
      const data = dataInput.value; // Get data from input
      
      // Simulate sending data to server (in real use, you would use AJAX/fetch)
      sendDataToServer(data);
      
      // Hide modal
      modal.style.display = "none";
    });
    
    function sendDataToServer(data) {
      // In a real scenario, you would use AJAX or fetch to send data to the server
      console.log("Sending data to server:", data);
      // Here you can implement the code to save the data to your database
    }
  });
  