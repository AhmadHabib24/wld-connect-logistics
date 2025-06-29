<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WLD Connect Logistics - Global Logistics Solutions')</title>
    <meta name="description" content="@yield('description', 'WLD Connect Logistics provides comprehensive logistics solutions including warehousing, freight handling, supply chain management, and international shipping services.')">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo/wldlogo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('logo/wldlogo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('logo/wldlogo.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Poppins', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont',
                            'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif'
                        ],
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <style>
        * {
            font-family: 'Poppins', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;
        }

        :root {
            --primary-blue: #1e3a5f;
            --primary-red: #dc2626;
            --light-gray: #f8fafc;
        }

        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #2563eb 100%);
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .service-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(30, 58, 95, 0.1);
        }

        .service-card:hover {
            border-color: var(--primary-red);
            box-shadow: 0 10px 25px rgba(220, 38, 38, 0.1);
        }

        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .stagger-animation {
            animation-delay: var(--delay, 0s);
        }

        /* Floating Chat Widget Styles */
        .chat-widget {
            position: fixed;
            bottom: 20px;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .chat-widget.left {
            left: 20px;
        }

        .chat-widget.right {
            right: 20px;
        }

        .chat-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
        }

        .chat-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        .chatbot-button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .whatsapp-button {
            background: #25D366;
            color: white;
        }

        .whatsapp-button:hover {
            background: #22c55e;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 0 rgba(102, 126, 234, 0.7);
            }

            70% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 10px rgba(102, 126, 234, 0);
            }

            100% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 0 rgba(102, 126, 234, 0);
            }
        }

        .whatsapp-button {
            animation: whatsapp-pulse 2s infinite;
        }

        @keyframes whatsapp-pulse {
            0% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 0 rgba(37, 211, 102, 0.7);
            }

            70% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 10px rgba(37, 211, 102, 0);
            }

            100% {
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15), 0 0 0 0 rgba(37, 211, 102, 0);
            }
        }

        /* Chat Window */
        .chat-window {
            position: fixed;
            bottom: 90px;
            left: 20px;
            width: 350px;
            height: 500px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            display: none;
            flex-direction: column;
            z-index: 1001;
            overflow: hidden;
        }

        .chat-window.open {
            display: flex;
        }

        .chat-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: between;
            align-items: center;
        }

        .chat-body {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background: #f8fafc;
        }

        .chat-message {
            margin-bottom: 15px;
            padding: 10px 15px;
            border-radius: 15px;
            max-width: 80%;
        }

        .bot-message {
            background: #e5e7eb;
            align-self: flex-start;
            border-bottom-left-radius: 5px;
        }

        .user-message {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            align-self: flex-end;
            margin-left: auto;
            border-bottom-right-radius: 5px;
        }

        .chat-input-container {
            padding: 15px 20px;
            border-top: 1px solid #e5e7eb;
            background: white;
        }

        .chat-input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #d1d5db;
            border-radius: 25px;
            outline: none;
            font-size: 14px;
        }

        .chat-input:focus {
            border-color: #667eea;
        }

        /* Tooltip */
        .tooltip {
            position: absolute;
            bottom: 70px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .tooltip::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border: 5px solid transparent;
            border-top-color: rgba(0, 0, 0, 0.8);
        }

        .chat-widget:hover .tooltip {
            opacity: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .chat-window {
                width: calc(100vw - 40px);
                left: 20px;
                bottom: 90px;
            }

            .chat-widget.left {
                left: 15px;
            }

            .chat-widget.right {
                right: 15px;
            }
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 flex items-center justify-center">
                        <!-- Actual Logo Image -->
                        <img src="{{ asset('logo/wldlogo.png') }}" alt="WLD Connect Logistics Logo"
                            class="object-contain" style="margin-left: 60px;max-width:130px";>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>
                    <div class="relative group">
                        <a href="{{ route('services') }}"
                            class="nav-link {{ request()->routeIs('services*') ? 'active' : '' }}">
                            Services
                        </a>
                        <!-- Services Dropdown -->
                        <div
                            class="absolute top-full left-0 mt-2 w-64 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('services.palletizing') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.palletizing') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Palletizing</a>
                                <a href="{{ route('services.warehousing') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.warehousing') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Warehousing</a>
                                <a href="{{ route('services.courier-express') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.courier-express') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Courier
                                    & Express Delivery</a>
                                <a href="{{ route('services.freight-cargo') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.freight-cargo') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Freight
                                    & Cargo Handling</a>
                                <a href="{{ route('services.supply-chain') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.supply-chain') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Supply
                                    Chain Management</a>
                                <a href="{{ route('services.shipping') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.shipping') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Local
                                    & International Shipping</a>
                                <a href="{{ route('services.distribution') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.distribution') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Distribution
                                    & Fulfillment</a>
                                <a href="{{ route('services.customs-clearance') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.customs-clearance') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Customs
                                    Clearance</a>
                                <a href="{{ route('services.last-mile') }}"
                                    class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-red-600 transition-colors {{ request()->routeIs('services.last-mile') ? 'bg-red-50 text-red-600 border-l-4 border-red-600' : '' }}">Last-Mile
                                    Delivery</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                        About Us
                    </a>
                    <a href="{{ route('contact') }}"
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        Contact Us
                    </a>
                    <a href="{{ route('contact') }}"
                        class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-colors font-semibold">
                        Get Quote
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="mobile-menu fixed top-0 right-0 h-full w-80 bg-white shadow-2xl z-50 overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-xl font-bold" style="color: var(--primary-blue);">Menu</h2>
                    <button id="close-mobile-menu" class="p-2 rounded-lg hover:bg-gray-100">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <nav class="space-y-4">
                    <a href="{{ route('home') }}"
                        class="block py-3 text-lg font-medium text-gray-700 hover:text-red-600 border-b border-gray-100 {{ request()->routeIs('home') ? 'text-red-600 bg-red-50 px-3 rounded-lg border-l-4 border-red-600' : '' }}">Home</a>
                    <div>
                        <button
                            class="w-full text-left py-3 text-lg font-medium text-gray-700 hover:text-red-600 border-b border-gray-100 flex justify-between items-center {{ request()->routeIs('services*') ? 'text-red-600' : '' }}"
                            onclick="toggleMobileSubmenu()">
                            Services
                            <svg class="w-5 h-5 transform transition-transform" id="services-arrow" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobile-services-submenu" class="hidden pl-4 space-y-2 mt-2">
                            <a href="{{ route('services.palletizing') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.palletizing') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Palletizing</a>
                            <a href="{{ route('services.warehousing') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.warehousing') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Warehousing</a>
                            <a href="{{ route('services.courier-express') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.courier-express') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Courier
                                & Express</a>
                            <a href="{{ route('services.freight-cargo') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.freight-cargo') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Freight
                                & Cargo</a>
                            <a href="{{ route('services.supply-chain') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.supply-chain') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Supply
                                Chain</a>
                            <a href="{{ route('services.shipping') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.shipping') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Shipping</a>
                            <a href="{{ route('services.distribution') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.distribution') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Distribution</a>
                            <a href="{{ route('services.customs-clearance') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.customs-clearance') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Customs
                                Clearance</a>
                            <a href="{{ route('services.last-mile') }}"
                                class="block py-2 text-gray-600 hover:text-red-600 {{ request()->routeIs('services.last-mile') ? 'text-red-600 font-semibold bg-red-50 px-2 rounded border-l-2 border-red-600' : '' }}">Last-Mile
                                Delivery</a>
                        </div>
                    </div>
                    <a href="{{ route('about') }}"
                        class="block py-3 text-lg font-medium text-gray-700 hover:text-red-600 border-b border-gray-100 {{ request()->routeIs('about') ? 'text-red-600 bg-red-50 px-3 rounded-lg border-l-4 border-red-600' : '' }}">About
                        Us</a>
                    <a href="{{ route('contact') }}"
                        class="block py-3 text-lg font-medium text-gray-700 hover:text-red-600 border-b border-gray-100 {{ request()->routeIs('contact') ? 'text-red-600 bg-red-50 px-3 rounded-lg border-l-4 border-red-600' : '' }}">Contact
                        Us</a>
                    <a href="{{ route('contact') }}"
                        class="block mt-6 bg-red-600 text-white px-6 py-3 rounded-lg text-center font-semibold hover:bg-red-700 transition-colors">Get
                        Quote</a>
                </nav>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>
    </header>

    <style>
        /* Custom CSS for nav-link active states */
        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: #374151;
            font-weight: 500;
            transition: all 0.3s ease;
            border-radius: 0.5rem;
        }

        .nav-link:hover {
            color: #dc2626;
            background-color: #fef2f2;
        }

        .nav-link.active {
            color: #dc2626;
            background-color: #fef2f2;
            font-weight: 600;
            position: relative;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 3px;
            background-color: #dc2626;
            border-radius: 2px;
        }

        /* Additional styling for dropdown active items */
        .dropdown-item-active {
            background-color: #fef2f2;
            color: #dc2626;
            border-left: 4px solid #dc2626;
            font-weight: 600;
        }

        /* Mobile menu active states */
        .mobile-nav-active {
            color: #dc2626;
            background-color: #fef2f2;
            padding-left: 0.75rem;
            padding-right: 0.75rem;
            border-radius: 0.5rem;
            border-left: 4px solid #dc2626;
            font-weight: 600;
        }

        .mobile-submenu-active {
            color: #dc2626;
            font-weight: 600;
            background-color: #fef2f2;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            border-radius: 0.25rem;
            border-left: 2px solid #dc2626;
        }
    </style>

    <!-- Main Content -->
    <main>
        @yield('content')

        <!-- Demo Content for Testing -->

    </main>

    <!-- Floating Chat Widgets -->
    <!-- Chatbot Widget (Left) -->
    <div class="chat-widget left" id="chatbot-widget">
        <div class="chat-button chatbot-button" onclick="toggleChatbot()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 2H4C2.9 2 2.01 2.9 2.01 4L2 22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2ZM6 9H18V11H6V9ZM14 14H6V12H14V14ZM18 8H6V6H18V8Z"
                    fill="currentColor" />
            </svg>
        </div>
        <div class="tooltip">Chat with us!</div>
    </div>

    <!-- Chat Window -->
    <div class="chat-window" id="chat-window">
        <div class="chat-header">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center mr-3">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 2H4C2.9 2 2.01 2.9 2.01 4L2 22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2Z"
                            fill="#667eea" />
                    </svg>
                </div>
                <div>
                    <h4 class="font-semibold">WLD Assistant</h4>
                    <p class="text-sm opacity-90">Online</p>
                </div>
            </div>
            <button onclick="closeChatbot()" class="text-white hover:bg-white hover:bg-opacity-20 p-1 rounded">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41Z"
                        fill="currentColor" />
                </svg>
            </button>
        </div>
        <div class="chat-body" id="chat-messages">
            <div class="chat-message bot-message">
                Hello! Welcome to WLD Connect Logistics. How can I help you today?
            </div>
            <div class="chat-message bot-message">
                I can assist you with:
                <br>• Shipping quotes
                <br>• Service information
                <br>• Track packages
                <br>• General inquiries
            </div>
        </div>
        <div class="chat-input-container">
            <input type="text" id="chat-input" class="chat-input" placeholder="Type your message..."
                onkeypress="handleChatInput(event)">
        </div>
    </div>

    <!-- WhatsApp Widget (Right) -->
    <div class="chat-widget right" id="whatsapp-widget">
        <div class="chat-button whatsapp-button" onclick="openWhatsApp()">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.472 14.382C17.124 14.206 15.471 13.393 15.162 13.281C14.853 13.169 14.631 13.112 14.409 13.459C14.187 13.806 13.566 14.557 13.383 14.779C13.199 15.001 13.016 15.03 12.668 14.854C12.32 14.678 11.177 14.319 9.797 13.095C8.723 12.145 7.991 10.963 7.808 10.616C7.625 10.269 7.787 10.102 7.963 9.927C8.122 9.768 8.311 9.519 8.487 9.336C8.663 9.153 8.721 9.023 8.833 8.801C8.945 8.579 8.889 8.396 8.801 8.22C8.713 8.044 7.991 6.391 7.721 5.697C7.458 5.025 7.189 5.112 6.985 5.101C6.793 5.091 6.571 5.089 6.349 5.089C6.127 5.089 5.779 5.177 5.47 5.524C5.161 5.871 4.296 6.684 4.296 8.337C4.296 9.99 5.509 11.587 5.685 11.809C5.861 12.031 7.991 15.173 11.258 16.65C12.037 16.994 12.639 17.202 13.107 17.351C13.888 17.608 14.6 17.574 15.165 17.484C15.789 17.383 17.107 16.675 17.377 15.9C17.647 15.125 17.647 14.465 17.559 14.32C17.471 14.175 17.249 14.087 16.901 13.911L17.472 14.382Z"
                    fill="currentColor" />
                <path
                    d="M20.52 3.449C18.24 1.149 15.24 -0.099 12.045 0.003C5.463 0.003 0.104 5.362 0.104 11.944C0.104 14.049 0.707 16.099 1.832 17.884L0 24L6.304 22.212C8.026 23.245 10.014 23.79 12.045 23.79C18.627 23.79 23.986 18.431 23.986 11.849C24.088 8.654 22.8 5.654 20.52 3.449ZM12.045 21.785C10.236 21.785 8.463 21.285 6.931 20.347L6.544 20.124L2.839 21.094L3.829 17.484L3.572 17.077C2.562 15.496 2.021 13.685 2.021 11.849C2.021 6.468 6.468 2.021 11.849 2.021C14.463 2.021 16.926 3.049 18.764 4.887C20.602 6.725 21.63 9.188 21.63 11.802C21.73 17.183 17.283 21.63 11.902 21.63L12.045 21.785Z"
                    fill="currentColor" />
            </svg>
        </div>
        <div class="tooltip">Chat on WhatsApp</div>
    </div>

    <!-- Footer -->
    <footer class="gradient-bg text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 flex items-center justify-center">
                            <!-- Footer Logo -->
                            <img src="{{ asset('logo/wldlogo.png') }}" alt="WLD Connect Logistics"
                                class="object-contain filter brightness-0 invert"
                                style="margin-left: 60px;max-width:130px";>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold" style="margin-left: 70px">WLD CONNECT LOGISTICS</h3>
                        </div>
                    </div>
                    <p class="text-blue-100 mb-4 leading-relaxed">
                        Your trusted partner for comprehensive logistics solutions. We connect businesses worldwide with
                        reliable, efficient, and cost-effective shipping and supply chain services.
                    </p>
                    <div class="flex space-x-4">
                        <!-- Social Media Icons -->
                        <a href="#" class="text-blue-100 hover:text-white transition-colors"
                            title="Follow us on Facebook">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-blue-100 hover:text-white transition-colors"
                            title="Follow us on Instagram">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <!-- Twitter -->
                        <a href="#" class="text-blue-100 hover:text-white transition-colors"
                            title="Follow us on Twitter">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <!-- LinkedIn -->
                        <a href="#" class="text-blue-100 hover:text-white transition-colors"
                            title="Connect with us on LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <!-- YouTube -->
                        <a href="#" class="text-blue-100 hover:text-white transition-colors"
                            title="Subscribe to our YouTube channel">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}"
                                class="text-blue-100 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('services') }}"
                                class="text-blue-100 hover:text-white transition-colors">Services</a></li>
                        <li><a href="{{ route('about') }}"
                                class="text-blue-100 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="text-blue-100 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Our Services</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('services.warehousing') }}"
                                class="text-blue-100 hover:text-white transition-colors">Warehousing</a></li>
                        <li><a href="{{ route('services.shipping') }}"
                                class="text-blue-100 hover:text-white transition-colors">International Shipping</a>
                        </li>
                        <li><a href="{{ route('services.supply-chain') }}"
                                class="text-blue-100 hover:text-white transition-colors">Supply Chain</a></li>
                        <li><a href="{{ route('services.customs-clearance') }}"
                                class="text-blue-100 hover:text-white transition-colors">Customs Clearance</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-blue-400 mt-8 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-blue-100">&copy; {{ date('Y') }} WLD Connect Logistics Limited. All rights
                        reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="{{ route('privacy-policy') }}"
                            class="text-blue-100 hover:text-white transition-colors">Privacy Policy</a>
                        <a href="{{ route('terms-of-service') }}"
                            class="text-blue-100 hover:text-white transition-colors">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .nav-link {
            @apply text-gray-700 hover:text-red-600 font-medium transition-colors duration-200 relative;
        }

        .nav-link.active {
            @apply text-red-600;
        }
    </style>

    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenu = document.getElementById('close-mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

        function openMobileMenu() {
            mobileMenu.classList.add('open');
            mobileMenuOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeMobileMenuHandler() {
            mobileMenu.classList.remove('open');
            mobileMenuOverlay.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        mobileMenuBtn.addEventListener('click', openMobileMenu);
        closeMobileMenu.addEventListener('click', closeMobileMenuHandler);
        mobileMenuOverlay.addEventListener('click', closeMobileMenuHandler);

        // Mobile services submenu
        function toggleMobileSubmenu() {
            const submenu = document.getElementById('mobile-services-submenu');
            const arrow = document.getElementById('services-arrow');

            if (submenu.classList.contains('hidden')) {
                submenu.classList.remove('hidden');
                arrow.style.transform = 'rotate(180deg)';
            } else {
                submenu.classList.add('hidden');
                arrow.style.transform = 'rotate(0deg)';
            }
        }

        // Chat Widget Functions
        function toggleChatbot() {
            const chatWindow = document.getElementById('chat-window');
            chatWindow.classList.toggle('open');
        }

        function closeChatbot() {
            const chatWindow = document.getElementById('chat-window');
            chatWindow.classList.remove('open');
        }

        function openWhatsApp() {
            // WhatsApp number (replace with your actual WhatsApp number)
            const phoneNumber = '+1234567890'; // Replace with your WhatsApp number
            const message = 'Hello! I need assistance with logistics services.';
            const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, '_blank');
        }

        function handleChatInput(event) {
            if (event.key === 'Enter') {
                const input = document.getElementById('chat-input');
                const message = input.value.trim();

                if (message) {
                    addChatMessage(message, 'user');
                    input.value = '';

                    // Simulate bot response
                    setTimeout(() => {
                        handleBotResponse(message);
                    }, 1000);
                }
            }
        }

        function addChatMessage(message, sender) {
            const messagesContainer = document.getElementById('chat-messages');
            const messageDiv = document.createElement('div');
            messageDiv.className = `chat-message ${sender}-message`;
            messageDiv.textContent = message;
            messagesContainer.appendChild(messageDiv);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }

        function handleBotResponse(userMessage) {
            const message = userMessage.toLowerCase();
            let response = '';

            if (message.includes('quote') || message.includes('price') || message.includes('cost')) {
                response =
                    'I\'d be happy to help you with a quote! Please provide details about your shipping requirements, and I\'ll connect you with our sales team for accurate pricing.';
            } else if (message.includes('track') || message.includes('tracking')) {
                response =
                    'To track your package, please provide your tracking number. You can also visit our tracking page on the website.';
            } else if (message.includes('service') || message.includes('what')) {
                response =
                    'We offer comprehensive logistics services including Warehousing, International Shipping, Supply Chain Management, Customs Clearance, Last-Mile Delivery, and more. Which service interests you?';
            } else if (message.includes('contact') || message.includes('phone') || message.includes('email')) {
                response =
                    'You can reach us through our contact page, or click the WhatsApp button to chat directly with our team. We\'re here to help!';
            } else if (message.includes('hello') || message.includes('hi') || message.includes('hey')) {
                response = 'Hello! Welcome to WLD Connect Logistics. How can I assist you with your logistics needs today?';
            } else {
                response =
                    'Thank you for your message! For detailed assistance, please contact our support team or use the WhatsApp button to chat with a live agent.';
            }

            addChatMessage(response, 'bot');
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add animation classes on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in-up');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', () => {
            const animateElements = document.querySelectorAll('.service-card, .hover-lift');
            animateElements.forEach(el => observer.observe(el));
        });
    </script>
</body>

</html>
