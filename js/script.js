const users = [];

document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('regUsername').value;
    const password = document.getElementById('regPassword').value;
    users.push({username, password, role: 'user'});
    alert('Regjistrimi ishte i suksesshëm!');
});

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const user = users.find(u => u.username === username && u.password === password);
    
    if (user) {
        alert(`Kyçu si ${user.role}`);
    } else {
        alert('Emri i përdoruesit ose fjalëkalimi është i gabuar.');
    }
});