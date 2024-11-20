document.getElementById('studentForm').addEventListener('submit', function(e) {
    const name = document.getElementById('name').value;
    const age = document.getElementById('age').value;
    const email = document.getElementById('email').value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (age < 18 || age > 50) {
        alert('Age = 18 to 50.');
        e.preventDefault();
    }

    if (!emailRegex.test(email)) {
        alert('Give me a valid email address');
        e.preventDefault();
    }
});
