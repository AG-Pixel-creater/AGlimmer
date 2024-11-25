document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('welcomeForm');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const username = document.getElementById('username').value;
        alert('Welcome, ' + username + '!');
        form.submit();
    });
});
