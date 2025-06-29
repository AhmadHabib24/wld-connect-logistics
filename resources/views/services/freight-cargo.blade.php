@extends('layouts.app')

@section('title', 'Freight & Cargo Handling - WLD Connect Logistics')
@section('description', 'Professional freight and cargo handling services with heavy-duty equipment, specialized
    handling techniques, and comprehensive logistics solutions for all cargo types.')

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
                                    d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0M15 17a2 2 0 104 0" />
                            </svg>
                        </div>
                        <!-- Rotating ring around icon -->
                        <div class="absolute inset-0 border-2 border-red-400/30 rounded-full animate-spin"></div>
                        <!-- Pulsing outer ring -->
                        <div class="absolute inset-0 border-2 border-white/20 rounded-full animate-ping"></div>
                    </div>
                </div>

                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    <span class="text-red-400">Freight &</span> Cargo Handling
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                    Professional freight and cargo handling services with specialized equipment, expert logistics, and
                    comprehensive solutions for all cargo types and sizes.
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
                                    d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0M15 17a2 2 0 104 0" />
                            </svg>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900">
                            Heavy-Duty Cargo Solutions
                        </h2>
                    </div>

                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our comprehensive freight and cargo handling services utilize state-of-the-art equipment and
                        experienced professionals to manage everything from standard shipments to oversized, heavy, and
                        specialized cargo with the utmost care and precision.
                    </p>

                    <div class="space-y-6">
                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900 mb-2">Heavy Equipment & Machinery</h3>
                                <p class="text-blue-800">Specialized handling of heavy machinery, industrial equipment, and
                                    oversized cargo with certified operators.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-green-900 mb-2">Container & Bulk Cargo</h3>
                                <p class="text-green-800">Full container load (FCL) and less than container load (LCL)
                                    services with efficient container handling.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-red-900 mb-2">Specialized Cargo Protection</h3>
                                <p class="text-red-800">Temperature-controlled, hazardous materials, and fragile cargo
                                    handling with specialized safety protocols.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Stats -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-blue-600">
                            <div class="text-2xl font-bold text-blue-600">100T+</div>
                            <div class="text-sm text-gray-600">Lifting Capacity</div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-green-600">
                            <div class="text-2xl font-bold text-green-600">99.7%</div>
                            <div class="text-sm text-gray-600">Safe Handling</div>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 backdrop-blur-sm">
                            <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                alt="Heavy Cargo Handling with Cranes and Equipment"
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
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Certified
                                </div>
                            </div>

                            <div class="absolute top-4 left-4">
                                <div
                                    class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    Heavy-Duty
                                </div>
                            </div>

                            <!-- Bottom feature highlights -->
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="grid grid-cols-3 gap-3">
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-blue-900">100T+</div>
                                        <div class="text-xs text-blue-700">Capacity</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-green-900">24/7</div>
                                        <div class="text-xs text-green-700">Operations</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-red-900">Expert</div>
                                        <div class="text-xs text-red-700">Operators</div>
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
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Smart Monitoring</h4>
                                <p class="text-sm text-gray-600">Real-time cargo tracking</p>
                            </div>

                            <div class="bg-white rounded-lg shadow-md p-4 text-center hover-lift">
                                <div
                                    class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Safety Systems</h4>
                                <p class="text-sm text-gray-600">Advanced safety protocols</p>
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
                    Cargo Handling <span class="text-red-600">Features</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our comprehensive freight and cargo handling services include everything you need for safe, efficient
                    cargo management.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Heavy Machinery Handling</h3>
                    <p class="text-gray-600">Specialized equipment and certified operators for handling heavy machinery,
                        industrial equipment, and oversized cargo.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.1s;">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Container Services</h3>
                    <p class="text-gray-600">Complete container handling including loading, unloading, and efficient
                        container yard management services.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Temperature Control</h3>
                    <p class="text-gray-600">Climate-controlled handling and storage for temperature-sensitive cargo and
                        perishable goods.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.3s;">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Hazardous Materials</h3>
                    <p class="text-gray-600">Certified handling of dangerous goods and hazardous materials with strict
                        safety compliance protocols.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.4s;">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Secure Loading</h3>
                    <p class="text-gray-600">Professional loading and securing techniques to ensure cargo safety during
                        transportation and handling.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.5s;">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Load Planning</h3>
                    <p class="text-gray-600">Advanced load planning and weight distribution analysis to maximize efficiency
                        and ensure safety.</p>
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
                        Equipment <span class="text-red-600">Specifications</span>
                    </h2>

                    <div class="space-y-6">
                        <div class="border-l-4 border-red-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Lifting Capacity</h3>
                            <p class="text-gray-600">Mobile cranes up to 100 tons, overhead cranes up to 50 tons, and
                                specialized lifting equipment</p>
                        </div>

                        <div class="border-l-4 border-blue-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Storage Facilities</h3>
                            <p class="text-gray-600">200,000+ sq ft of covered storage with specialized areas for different
                                cargo types</p>
                        </div>

                        <div class="border-l-4 border-green-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Vehicle Fleet</h3>
                            <p class="text-gray-600">Heavy-duty trucks, flatbeds, lowboys, and specialized transport
                                vehicles up to 80 tons</p>
                        </div>

                        <div class="border-l-4 border-purple-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Container Handling</h3>
                            <p class="text-gray-600">Reach stackers, container forklifts, and automated container handling
                                systems</p>
                        </div>

                        <div class="border-l-4 border-yellow-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Safety Equipment</h3>
                            <p class="text-gray-600">Certified rigging equipment, safety monitoring systems, and emergency
                                response protocols</p>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="bg-gray-50 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Technology Features</h3>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">API Integration for Business Clients</span>
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
                    Flexible courier and express delivery plans designed to meet your shipping frequency and budget
                    requirements.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Standard Delivery</h3>
                        <div class="text-4xl font-bold text-gray-900 mb-2">$15<span
                                class="text-lg text-gray-600">/delivery</span></div>
                        <p class="text-gray-600">Perfect for occasional shipping needs</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Same-day delivery within city</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Basic tracking updates</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Up to 5kg packages</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Email notifications</span>
                        </li>
                    </ul>

                    <button
                        class="w-full bg-gray-900 text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
                        Get Started
                    </button>
                </div>

                <!-- Professional Plan -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover-lift fade-in-up stagger-animation border-2 border-red-600 relative"
                    style="--delay: 0.1s;">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold">Most
                            Popular</span>
                    </div>

                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Express Plus</h3>
                        <div class="text-4xl font-bold text-gray-900 mb-2">$25<span
                                class="text-lg text-gray-600">/delivery</span></div>
                        <p class="text-gray-600">Ideal for business customers</p>
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
                            <span class="text-gray-700">Real-time GPS tracking</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Up to 25kg packages</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Priority customer support</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Digital proof of delivery</span>
                        </li>
                    </ul>

                    <button
                        class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                        Get Started
                    </button>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise</h3>
                        <div class="text-4xl font-bold text-gray-900 mb-2">Custom<span class="text-lg text-gray-600">
                                pricing</span></div>
                        <p class="text-gray-600">For high-volume shippers</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Dedicated delivery fleet</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">API integration</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Unlimited package weight</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Dedicated account manager</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Custom reporting & analytics</span>
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
                    Ready for Lightning-Fast Delivery?
                </h2>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Contact our delivery experts today to discuss your shipping requirements and get started with our
                    reliable courier and express delivery services.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}"
                        class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                        Book Delivery Now
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
