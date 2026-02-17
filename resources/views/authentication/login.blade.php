<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlwaysApply - Login</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            purple: '#6b21a8', 
                            light: '#f3e8ff',
                            dark: '#4c1d95',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom checkbox style to match design color */
        .checkbox-custom:checked {
            background-color: #6b21a8;
            border-color: #6b21a8;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <nav class="bg-white py-4 px-6 md:px-12 flex items-center justify-between relative z-50 shadow-sm">
        <a href="#" class="flex items-center gap-2 cursor-pointer text-decoration-none">
            <i class="fa-solid fa-magnifying-glass text-brand-purple text-xl"></i>
            <span class="text-xl font-bold text-brand-purple">AlwaysApply</span>
        </a>

        <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-700">
            <a href="#" class="hover:text-brand-purple transition">Home</a>
            <a href="#" class="hover:text-brand-purple transition">Find Jobs</a>
            <a href="#" class="hover:text-brand-purple transition">Employers</a>
            <a href="#" class="hover:text-brand-purple transition">Admin</a>
            <a href="#" class="hover:text-brand-purple transition">About Us</a>
        </div>

        <div class="hidden md:flex items-center gap-4">
            <button class="px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium hover:bg-brand-light transition">
                Contact Us
            </button>
            <button class="px-6 py-2 bg-brand-purple text-white rounded font-medium shadow-md hover:bg-brand-dark transition">
                Login
            </button>
        </div>

        <button id="mobile-menu-btn" class="md:hidden text-2xl text-gray-700 focus:outline-none">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden flex-col bg-white border-t p-4 md:hidden absolute w-full z-40 shadow-lg">
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Home</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Find Jobs</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Employers</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">Admin</a>
        <a href="#" class="block py-2 text-gray-700 hover:text-brand-purple">About Us</a>
        <div class="mt-4 flex flex-col gap-3">
            <button class="w-full px-5 py-2 border border-brand-purple text-brand-purple rounded font-medium">
                Contact Us
            </button>
            <button class="w-full px-6 py-2 bg-brand-purple text-white rounded font-medium">
                Login
            </button>
        </div>
    </div>
 <div class="m-6 text-center">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Login to your Account</h1>
                    <p class="text-gray-500">Welcome back! Select the below login methods.</p>
                </div>
    <main class="min-h-[calc(100vh-80px)] flex items-center justify-center p-4 md:p-8">
       
        
        <div class="bg-white rounded-[30px] shadow-2xl w-full max-w-[1100px] overflow-hidden flex flex-col md:flex-row min-h-[600px]">
            
            <div class="w-full md:w-1/2 p-8 md:p-12 lg:p-16 flex flex-col justify-center">
                
                

                <form action="#" class="space-y-6">
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email ID / Username</label>
                        <input type="text" placeholder="Enter email id / username" 
                            class="w-full border border-gray-200 rounded-lg px-4 py-3.5 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400 bg-white">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="passwordInput" placeholder="Enter password" 
                                class="w-full border border-gray-200 rounded-lg px-4 py-3.5 text-gray-700 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-transparent placeholder-gray-400 bg-white pr-16">
                            
                            <button type="button" onclick="togglePassword()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-brand-purple font-medium text-sm hover:text-purple-900 focus:outline-none">
                                Show
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <input id="remember" type="checkbox" class="w-4 h-4 checkbox-custom border-gray-300 rounded focus:ring-brand-purple accent-purple-700">
                            <label for="remember" class="text-sm text-gray-600">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-brand-purple font-medium hover:underline">Forgot Password?</a>
                    </div>

                    <button type="submit" class="w-full py-3.5 bg-brand-purple text-white text-lg font-bold rounded-lg shadow-lg hover:bg-brand-dark transition transform active:scale-95">
                        Login
                    </button>

                    <div class="relative flex py-4 items-center">
                        <div class="flex-grow border-t border-gray-200"></div>
                        <span class="flex-shrink-0 mx-4 text-gray-500 text-sm">or login with</span>
                        <div class="flex-grow border-t border-gray-200"></div>
                    </div>

                    <div class="flex justify-center gap-6">
                        <button type="button" class="w-12 h-12 flex items-center justify-center bg-white border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition">
                            <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-6 h-6">
                        </button>
                        
                        <button type="button" class="w-12 h-12 flex items-center justify-center bg-white border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg" alt="Facebook" class="w-6 h-6">
                        </button>
                        
                        <button type="button" class="w-12 h-12 flex items-center justify-center bg-white border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" class="w-6 h-6">
                        </button>
                    </div>

                    <div class="text-center mt-6">
                        <p class="text-gray-600">Don't have an account? <a href="#" class="text-brand-purple font-bold hover:underline">Register</a></p>
                    </div>
                </form>
            </div>

            <div class="hidden md:flex w-1/2 bg-brand-light items-center justify-center p-12 relative overflow-hidden">
                <div class="absolute w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
                
                <img src="{{ asset('images/login.png') }}" 
                     alt="Login Illustration" 
                     class="relative z-10 w-full max-w-md object-contain drop-shadow-xl rounded-xl">
            </div>
        </div>
    </main>

    <script>
        // Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Password Show/Hide Toggle
        function togglePassword() {
            const passwordInput = document.getElementById('passwordInput');
            const toggleBtn = event.currentTarget; // The button that was clicked
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleBtn.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                toggleBtn.textContent = 'Show';
            }
        }
    </script>
</body>
</html>