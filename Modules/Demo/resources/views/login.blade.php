@extends('demo::layouts.master')

@section('content')
<style>
    body {
        background: #f9f9f9 !important;
        font-family: 'Dancing Script', 'Figtree', 'Poppins', cursive, sans-serif;
    }
</style>
<!-- Font aesthetic -->
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=Figtree:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="card shadow-lg p-5" style="min-width:440px; max-width:520px; border-radius: 32px; background: #fffbe9; border: 3px solid #c6a47e;">
        <div class="text-center mb-5">
            <h2 style="font-family: 'Dancing Script', cursive; color: #7d5a3a; font-style: italic; letter-spacing:2px; font-size:2.6rem;">MENU LOGIN</h2>
        </div>
        <form x-data="{ showPassword: false }" class="mb-4">
            <input type="text" class="form-control form-control-lg mb-4" placeholder="Email or Username" style="background: #f9f5ee; border-color: #c6a47e; font-family:'Figtree',cursive; font-size:1.2rem; height:56px;">
            <div class="input-group mb-4" style="height:56px;">
                <input :type="showPassword ? 'text' : 'password'" class="form-control form-control-lg" placeholder="Password" style="background: #f9f5ee; border-color: #c6a47e; font-family:'Figtree',cursive; font-size:1.2rem; height:56px;">
                <button type="button" class="btn btn-outline-secondary" @click="showPassword = !showPassword" tabindex="-1" style="font-size:1.3rem;">
                    <span x-text="showPassword ? '🙈' : '👁️'"></span>
                </button>
            </div>
            <div class="d-flex justify-content-between mb-5 gap-3">
                <button type="button" class="btn btn-light flex-fill d-flex align-items-center justify-content-center" style="border: 2px solid #c6a47e; background: #f1e2d0; height:60px;">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google" width="38">
                </button>
                <button type="button" class="btn btn-light flex-fill d-flex align-items-center justify-content-center" style="border: 2px solid #c6a47e; background: #f1e2d0; height:60px;">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg" alt="Facebook" width="38">
                </button>
                <button type="button" class="btn btn-light flex-fill d-flex align-items-center justify-content-center" style="border: 2px solid #c6a47e; background: #f1e2d0; height:60px;">
                    <img src="https://cdn-icons-png.flaticon.com/512/15/15874.png" alt="Phone" width="38">
                </button>
            </div>
            <button type="submit" class="btn w-100 mb-3 py-3" style="background: #c6a47e; color: #fff; font-weight: bold; font-family:'Figtree',cursive; font-size:1.3rem; border-radius: 16px;">Login</button>
        </form>
        <div class="text-center mt-3">
            <span style="font-family:'Figtree',cursive; font-size:1.1rem;">Belum punya akun? <a href="#" style="color: #7d5a3a; font-weight:bold;">Register</a></span>
        </div>
    </div>
</div>
<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.0/dist/cdn.min.js" defer></script>
@endsection