@extends('layouts.main')

@section('title', 'Login - TokoKeren')

@section('content')
  <div class="login-container">
    <h2>Login ke TokoKeren</h2>
    <p id="error-message" style="color: red;"></p>

    <form onsubmit="return handleLogin(event)">
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" required>
      </div>
      <div>
        <button type="submit">Login</button>
      </div>
    </form>
  </div>

  <script>
    function handleLogin(event) {
      event.preventDefault();
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const errorMessage = document.getElementById('error-message');

      const adminEmail = 'admin@tokokeren.com';
      const adminPassword = 'admin123';

      if (email === adminEmail && password === adminPassword) {
        window.location.href = "/dashboard";
      } else {
        errorMessage.textContent = 'Email atau password salah!';
      }
    }
  </script>
@endsection
