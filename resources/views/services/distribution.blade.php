@extends('layouts.app')

@section('title', 'Distribution & Fulfillment - WLD Connect Logistics')
@section('description', 'Complete distribution and fulfillment services including inventory management, order
    processing, pick & pack operations, and nationwide distribution network solutions.')

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
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <!-- Rotating ring around icon -->
                        <div class="absolute inset-0 border-2 border-red-400/30 rounded-full animate-spin"></div>
                        <!-- Pulsing outer ring -->
                        <div class="absolute inset-0 border-2 border-white/20 rounded-full animate-ping"></div>
                    </div>
                </div>

                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    <span class="text-red-400">Distribution &</span> Fulfillment
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                    Complete distribution and fulfillment solutions with inventory management, order processing, pick & pack
                    operations, and nationwide distribution networks.
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
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900">
                            End-to-End Distribution Solutions
                        </h2>
                    </div>

                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our comprehensive distribution and fulfillment services streamline your supply chain with advanced
                        inventory management, automated order processing, and efficient pick & pack operations backed by a
                        nationwide distribution network.
                    </p>

                    <div class="space-y-6">
                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-blue-900 mb-2">Inventory Management</h3>
                                <p class="text-blue-800">Real-time inventory tracking, automated reordering, and
                                    comprehensive stock level management systems.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-green-900 mb-2">Order Fulfillment</h3>
                                <p class="text-green-800">Automated order processing, pick & pack operations, and same-day
                                    fulfillment capabilities.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-red-900 mb-2">Distribution Network</h3>
                                <p class="text-red-800">Nationwide distribution centers with strategic locations for
                                    optimized delivery times and reduced costs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Stats -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-blue-600">
                            <div class="text-2xl font-bold text-blue-600">99.8%</div>
                            <div class="text-sm text-gray-600">Order Accuracy</div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-green-600">
                            <div class="text-2xl font-bold text-green-600">24H</div>
                            <div class="text-sm text-gray-600">Fulfillment Time</div>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 backdrop-blur-sm">
                            <img src="https://images.unsplash.com/photo-1566576912321-d58ddd7a6088?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                alt="Modern Distribution Center with Automated Systems"
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
                                    Automated
                                </div>
                            </div>

                            <div class="absolute top-4 left-4">
                                <div
                                    class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                    Real-time
                                </div>
                            </div>

                            <!-- Bottom feature highlights -->
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="grid grid-cols-3 gap-3">
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-blue-900">50K</div>
                                        <div class="text-xs text-blue-700">Orders/Day</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-green-900">15+</div>
                                        <div class="text-xs text-green-700">Locations</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-red-900">99.8%</div>
                                        <div class="text-xs text-red-700">Accuracy</div>
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
                                <h4 class="font-semibold text-gray-900 mb-1">WMS Integration</h4>
                                <p class="text-sm text-gray-600">Advanced warehouse management</p>
                            </div>

                            <div class="bg-white rounded-lg shadow-md p-4 text-center hover-lift">
                                <div
                                    class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Analytics Dashboard</h4>
                                <p class="text-sm text-gray-600">Real-time performance metrics</p>
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
                    Distribution <span class="text-red-600">Features</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our comprehensive distribution and fulfillment services include everything you need for efficient supply
                    chain management.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Inventory Control</h3>
                    <p class="text-gray-600">Real-time inventory tracking with automated reordering, cycle counting, and
                        comprehensive stock management systems.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.1s;">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Pick & Pack Operations</h3>
                    <p class="text-gray-600">Automated picking systems, custom packaging solutions, and quality control for
                        accurate order fulfillment.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Order Processing</h3>
                    <p class="text-gray-600">Automated order management with EDI integration, batch processing, and
                        real-time order status updates.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.3s;">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Distribution Network</h3>
                    <p class="text-gray-600">Strategic distribution centers nationwide with optimized routing and last-mile
                        delivery capabilities.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.4s;">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Analytics & Reporting</h3>
                    <p class="text-gray-600">Comprehensive reporting dashboards with KPI tracking, performance analytics,
                        and business intelligence.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.5s;">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Returns Processing</h3>
                    <p class="text-gray-600">Efficient reverse logistics with return authorization, quality inspection, and
                        restocking procedures.</p>
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
                        Facility <span class="text-red-600">Specifications</span>
                    </h2>

                    <div class="space-y-6">
                        <div class="border-l-4 border-red-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Warehouse Capacity</h3>
                            <p class="text-gray-600">2.5 million sq ft of distribution space across 15+ strategic locations
                                nationwide</p>
                        </div>

                        <div class="border-l-4 border-blue-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Processing Volume</h3>
                            <p class="text-gray-600">50,000+ orders processed daily with 99.8% accuracy rate and same-day
                                fulfillment</p>
                        </div>

                        <div class="border-l-4 border-green-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Technology Systems</h3>
                            <p class="text-gray-600">Advanced WMS, automated sorting, robotics, and AI-powered inventory
                                optimization</p>
                        </div>

                        <div class="border-l-4 border-purple-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Integration Capabilities</h3>
                            <p class="text-gray-600">EDI, API, and custom integrations with major e-commerce and ERP
                                platforms</p>
                        </div>

                        <div class="border-l-4 border-yellow-600 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Security & Compliance</h3>
                            <p class="text-gray-600">24/7 security monitoring, temperature-controlled zones, and industry
                                certifications</p>
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
                                <span class="text-gray-700">Real-time Inventory Visibility</span>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Automated Order Processing</span>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Multi-channel Fulfillment</span>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Advanced Analytics Dashboard</span>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">EDI & API Integration</span>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Returns Management System</span>
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
                    Fulfillment <span class="text-red-600">Plans</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Flexible distribution and fulfillment plans designed to scale with your business growth and volume
                    requirements.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Starter Plan -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Starter</h3>
                        <div class="text-4xl font-bold text-gray-900 mb-2">$2.50<span
                                class="text-lg text-gray-600">/order</span></div>
                        <p class="text-gray-600">Perfect for small businesses</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Up to 500 orders/month</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Basic inventory management</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Standard packaging</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">48-hour fulfillment</span>
                        </li>
                    </ul>

                    <button
                        class="w-full bg-gray-900 text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
                        Get Started
                    </button>
                </div>

                <!-- Growth Plan -->
                <div class="bg-white rounded-2xl p-8 shadow-xl hover-lift fade-in-up stagger-animation border-2 border-red-600 relative"
                    style="--delay: 0.1s;">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <span class="bg-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold">Most
                            Popular</span>
                    </div>

                    <div class="text-center mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Growth</h3>
                        <div class="text-4xl font-bold text-gray-900 mb-2">$1.80<span
                                class="text-lg text-gray-600">/order</span></div>
                        <p class="text-gray-600">Ideal for growing businesses</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Up to 5,000 orders/month</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Advanced inventory analytics</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Custom packaging options</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Same-day fulfillment</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">API integration</span>
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
                        <p class="text-gray-600">For high-volume operations</p>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Unlimited order volume</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">Dedicated facility space</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-gray-700">White-label fulfillment</span>
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
                            <span class="text-gray-700">Custom WMS integration</span>
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
                    Ready to Optimize Your Distribution?
                </h2>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Contact our fulfillment experts today to discuss your distribution requirements and discover how our
                    comprehensive solutions can streamline your supply chain operations.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}"
                        class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                        Start Fulfillment
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
