document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('welcomeForm');
    const greetingDiv = document.getElementById('greeting');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        const formData = new FormData(form);
        fetch('php/welcome.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            greetingDiv.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
            greetingDiv.textContent = 'An error occurred. Please try again.';
        });
    });
});
