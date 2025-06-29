@extends('layouts.app')

@section('title', 'Last-Mile Delivery - WLD Connect Logistics')
@section('description', 'Professional last-mile delivery services with real-time tracking, same-day delivery, route
    optimization, and comprehensive coverage for residential and commercial deliveries.')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-bg text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>

        <!-- Floating Elements -->
        <div class="absolute top-20 right-10 opacity-20">
            <div class="w-20 h-20 border-2 border-white rounded-full animate-pulse"></div>
        </div>
        <div class="absolute bottom-20 left-10 opacity-20">
            <div class="w-16 h-16 border-2 border-red-400 rounded-full animate-bounce"></div>
        </div>
        <div class="absolute top-1/3 left-1/4 opacity-15">
            <div class="w-12 h-12 border-2 border-blue-300 rounded-full animate-ping"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-4xl mx-auto text-center fade-in-up">
                <!-- Icon Section -->
                <div class="flex justify-center mb-8">
                    <div class="relative">
                        <div class="w-24 h-24 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-12 h-12 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5-5l-1 1M3 3l18 18" />
                            </svg>
                        </div>
                        <!-- Rotating ring around icon -->
                        <div class="absolute inset-0 border-2 border-red-400/30 rounded-full animate-spin"></div>
                        <!-- Pulsing outer ring -->
                        <div class="absolute inset-0 border-2 border-white/20 rounded-full animate-ping"></div>
                    </div>
                </div>

                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    <span class="text-red-400">Last-Mile</span> Delivery
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                    Professional last-mile delivery services with real-time tracking, same-day delivery capabilities, route
                    optimization, and comprehensive coverage for all your delivery needs.
                </p>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-up">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900">
                            Complete Last-Mile Solutions
                        </h2>
                    </div>

                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our advanced last-mile delivery services ensure fast, reliable, and trackable deliveries with
                        real-time GPS monitoring, flexible delivery windows, and comprehensive coverage for residential and
                        commercial addresses.
                    </p>

                    <div class="space-y-6">
                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900 mb-2">Live Tracking System</h3>
                                <p class="text-blue-800">Real-time GPS tracking with live delivery updates, estimated
                                    arrival times, and customer notifications throughout the delivery process.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-green-900 mb-2">Same-Day Delivery</h3>
                                <p class="text-green-800">Express same-day and next-day delivery options with flexible time
                                    windows and priority handling for urgent deliveries.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-red-900 mb-2">Route Optimization</h3>
                                <p class="text-red-800">Advanced route planning with AI-powered optimization for efficient
                                    deliveries, reduced costs, and faster completion times.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Stats -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-blue-600">
                            <div class="text-2xl font-bold text-blue-600">98.5%</div>
                            <div class="text-sm text-gray-600">On-Time Delivery</div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-green-600">
                            <div class="text-2xl font-bold text-green-600">2H</div>
                            <div class="text-sm text-gray-600">Express Delivery</div>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 backdrop-blur-sm">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                alt="Last-Mile Delivery Van with GPS Tracking Technology"
                                class="w-full h-96 object-cover rounded-xl shadow-2xl">

                            <!-- Overlay with feature highlights -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent rounded-xl">
                            </div>

                            <!-- Feature badges -->
                            <div class="absolute top-4 right-4">
                                <div
                                    class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    Live Tracking
                                </div>
                            </div>

                            <div class="absolute top-4 left-4">
                                <div
                                    class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Same-Day
                                </div>
                            </div>

                            <!-- Bottom feature highlights -->
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="grid grid-cols-3 gap-3">
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-blue-900">5K+</div>
                                        <div class="text-xs text-blue-700">Daily Deliveries</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-green-900">25+</div>
                                        <div class="text-xs text-green-700">Service Areas</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-red-900">98.5%</div>
                                        <div class="text-xs text-red-700">Success Rate</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Technology highlights -->
                        <div class="grid grid-cols-2 gap-4 mt-6">
                            <div class="bg-white rounded-lg shadow-md p-4 text-center hover-lift">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">GPS Tracking</h4>
                                <p class="text-sm text-gray-600">Real-time location monitoring</p>
                            </div>

                            <div class="bg-white rounded-lg shadow-md p-4 text-center hover-lift">
                                <div
                                    class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Mobile App</h4>
                                <p class="text-sm text-gray-600">Customer tracking portal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Delivery <span class="text-red-600">Features</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our comprehensive last-mile delivery services include everything you need for efficient, trackable, and
                    reliable delivery operations.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Real-Time Tracking</h3>
                    <p class="text-gray-600">Live GPS tracking with real-time delivery updates, estimated arrival times,
                        and instant notifications for customers and senders.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.1s;">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Flexible Delivery Windows</h3>
                    <p class="text-gray-600">Same-day, next-day, and scheduled delivery options with specific time windows
                        to meet customer preferences and requirements.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Route Optimization</h3>
                    <p class="text-gray-600">AI-powered route planning and optimization for maximum efficiency, reduced
                        delivery times, and lower operational costs.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.3s;">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Digital Proof of Delivery</h3>
                    <p class="text-gray-600">Electronic signature capture, photo confirmation, and instant delivery
                        confirmations with detailed delivery reports.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.4s;">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Coverage Areas</h3>
                    <p class="text-gray-600">Comprehensive coverage for residential and commercial deliveries with urban,
                        suburban, and rural delivery capabilities.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.5s;">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Customer Communication</h3>
                    <p class="text-gray-600">Automated SMS and email notifications, delivery updates, and two-way
                        communication for rescheduling and special instructions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div class="fade-in-up">
                    <h2 class="text-4xl font-bold text-gray-900 mb-8">
                        Service <span class="text-red-600">Specifications</span>
                    </h2>

                    <div class="space-y-6">
                        <div class="border-l-4 border-red-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery Capacity</h3>
                            <p class="text-gray-600">5,000+ daily deliveries across 25+ service areas with flexible vehicle
                                fleet including vans, trucks, and motorcycles</p>
                        </div>

                        <div class="border-l-4 border-blue-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery Speed</h3>
                            <p class="text-gray-600">Express 2-hour delivery, same-day service, and scheduled delivery
                                windows with 98.5% on-time performance</p>
                        </div>

                        <div class="border-l-4 border-green-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Tracking Technology</h3>
                            <p class="text-gray-600">Real-time GPS tracking, mobile app integration, automated
                                notifications, and live delivery monitoring</p>
                        </div>

                        <div class="border-l-4 border-purple-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Service Coverage</h3>
                            <p class="text-gray-600">Urban and suburban coverage with residential and commercial delivery
                                options, including secure package handling</p>
                        </div>

                        <div class="border-l-4 border-yellow-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Security & Safety</h3>
                            <p class="text-gray-600">Background-checked drivers, insured deliveries, secure handling
                                protocols, and contactless delivery options</p>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="bg-gray-50 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Tracking Features</h3>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Digital Proof of Delivery</span>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Customer Communication Portal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Plans -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Delivery <span class="text-red-600">Plans</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Flexible last-mile delivery plans designed to meet your specific needs with real-time tracking and
                    reliable service options.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Basic</h3>
                        <div class="text-4xl font-bold text-gray-900 mb-2">$8.50<span
                                class="text-lg text-gray-600">/delivery</span></div>
                        <p class="text-gray-600">Standard last-mile delivery</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Next-day delivery</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Basic GPS tracking</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">SMS notifications</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Proof of delivery</span>
                        </li>
                    </ul>

                    <button
                        class="w-full bg-gray-900 text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
                        Get Started
                    </button>
                </div>

                <!-- Express Plan -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover-lift fade-in-up stagger-animation border-2 border-red-600 relative"
                    style="--delay: 0.1s;">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold">Most
                            Popular</span>
                    </div>

                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Express</h3>
                        <div class="text-4xl font-bold text-gray-900 mb-2">$12.90<span
                                class="text-lg text-gray-600">/delivery</span></div>
                        <p class="text-gray-600">Same-day delivery service</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Same-day delivery</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Real-time live tracking</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Time window selection</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Mobile app access</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Priority customer support</span>
                        </li>
                    </ul>

                    <button
                        class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                        Get Started
                    </button>
                </div>

                <!-- Premium Plan -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Premium</h3>
                        <div class="text-4xl font-bold text-gray-900 mb-2">$18.50<span
                                class="text-lg text-gray-600">/delivery</span></div>
                        <p class="text-gray-600">Express 2-hour delivery</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">2-hour express delivery</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Live GPS with ETA updates</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">White-glove service</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Dedicated delivery specialist</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Full insurance coverage</span>
                        </li>
                    </ul>

                    <button
                        class="w-full bg-gray-900 text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
                        Contact Sales
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="gradient-bg text-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-4xl mx-auto fade-in-up">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                    Ready to Experience Fast, Trackable Delivery?
                </h2>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Contact our last-mile delivery experts today to discuss your delivery requirements and discover how our
                    real-time tracking and flexible delivery options can enhance your customer experience.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}"
                        class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                        Start Delivery Service
                    </a>
                    <a href="{{ route('services') }}"
                        class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-900 transition-all duration-300">
                        View All Services
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
