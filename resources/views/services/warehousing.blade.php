@extends('layouts.app')

@section('title', 'Warehousing Services - WLD Connect Logistics')
@section('description', 'State-of-the-art warehousing facilities with advanced inventory management systems, climate-controlled environments, and 24/7 security monitoring.')

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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <!-- Rotating ring around icon -->
                    <div class="absolute inset-0 border-2 border-red-400/30 rounded-full animate-spin"></div>
                    <!-- Pulsing outer ring -->
                    <div class="absolute inset-0 border-2 border-white/20 rounded-full animate-ping"></div>
                </div>
            </div>
            
            <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                <span class="text-red-400">Warehousing</span> Services
            </h1>
            <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                State-of-the-art storage facilities with advanced inventory management systems designed to keep your goods secure and accessible.
            </p>
            
            <!-- Warehousing Feature Icons -->
           
            
            <!-- Warehousing Stats -->
            
        </div>
    </div>
    
    <!-- Wave separator -->
   
</section>

<!-- Service Overview -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="fade-in-up">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-900">
                        Advanced Warehousing Solutions
                    </h2>
                </div>
                
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Our modern warehousing facilities are equipped with cutting-edge technology and managed by experienced professionals to ensure your inventory is stored safely, organized efficiently, and readily accessible when needed.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 hover-lift">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Climate-Controlled Environment</h3>
                            <p class="text-blue-800">Temperature and humidity-controlled storage for sensitive goods requiring specific environmental conditions.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 hover-lift">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-green-900 mb-2">Real-Time Inventory Tracking</h3>
                            <p class="text-green-800">Advanced WMS technology providing real-time visibility of your inventory levels and locations.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 hover-lift">
                        <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-red-900 mb-2">24/7 Security Monitoring</h3>
                            <p class="text-red-800">Round-the-clock security with CCTV surveillance, access control, and trained security personnel.</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Stats -->
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-blue-600">
                        <div class="text-2xl font-bold text-blue-600">500K+</div>
                        <div class="text-sm text-gray-600">Sq Ft Storage</div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-green-600">
                        <div class="text-2xl font-bold text-green-600">99.9%</div>
                        <div class="text-sm text-gray-600">Accuracy Rate</div>
                    </div>
                </div>
            </div>

            <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                <div class="relative">
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 backdrop-blur-sm">
                        <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Modern Warehouse with Advanced Storage Systems" 
                             class="w-full h-96 object-cover rounded-xl shadow-2xl">
                        
                        <!-- Overlay with feature highlights -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent rounded-xl"></div>
                        
                        <!-- Feature badges -->
                        <div class="absolute top-4 right-4">
                            <div class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Certified
                            </div>
                        </div>

                        <div class="absolute top-4 left-4">
                            <div class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                24/7 Monitored
                            </div>
                        </div>
                        
                        <!-- Bottom feature highlights -->
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                    <div class="text-lg font-bold text-blue-900">Climate</div>
                                    <div class="text-xs text-blue-700">Controlled</div>
                                </div>
                                <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                    <div class="text-lg font-bold text-green-900">Real-time</div>
                                    <div class="text-xs text-green-700">Tracking</div>
                                </div>
                                <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                    <div class="text-lg font-bold text-red-900">Secure</div>
                                    <div class="text-xs text-red-700">Storage</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technology highlights -->
                    <div class="grid grid-cols-2 gap-4 mt-6">
                        <div class="bg-white rounded-lg shadow-md p-4 text-center hover-lift">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-1">WMS Technology</h4>
                            <p class="text-sm text-gray-600">Advanced warehouse management system</p>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md p-4 text-center hover-lift">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-1">Mobile Access</h4>
                            <p class="text-sm text-gray-600">Real-time inventory visibility</p>
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
                Warehousing <span class="text-red-600">Features</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our comprehensive warehousing solutions include everything you need for efficient inventory management.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Inventory Management</h3>
                <p class="text-gray-600">Advanced WMS with barcode scanning, cycle counting, and automated reporting for complete inventory control.</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation" style="--delay: 0.1s;">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Cross-Docking</h3>
                <p class="text-gray-600">Efficient cross-docking services to minimize storage time and reduce handling costs for time-sensitive shipments.</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation" style="--delay: 0.2s;">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Pick & Pack</h3>
                <p class="text-gray-600">Professional order fulfillment services with accurate picking, quality packing, and shipping preparation.</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation" style="--delay: 0.3s;">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Documentation & Reporting</h3>
                <p class="text-gray-600">Comprehensive documentation and detailed reporting for complete transparency and regulatory compliance.</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation" style="--delay: 0.4s;">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Security & Insurance</h3>
                <p class="text-gray-600">Comprehensive security measures and insurance coverage to protect your valuable inventory at all times.</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation" style="--delay: 0.5s;">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Rapid Processing</h3>
                <p class="text-gray-600">Fast receiving, processing, and dispatch capabilities to keep your supply chain moving efficiently.</p>
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
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Total Storage Capacity</h3>
                        <p class="text-gray-600">Over 500,000 square feet of modern warehouse space across multiple locations</p>
                    </div>
                    
                    <div class="border-l-4 border-blue-600 pl-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Temperature Control</h3>
                        <p class="text-gray-600">Climate-controlled environments from -20°C to +25°C with humidity control</p>
                    </div>
                    
                    <div class="border-l-4 border-green-600 pl-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Ceiling Height</h3>
                        <p class="text-gray-600">Clear ceiling heights up to 12 meters for high-density racking systems</p>
                    </div>
                    
                    <div class="border-l-4 border-purple-600 pl-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Loading Capabilities</h3>
                        <p class="text-gray-600">48 dock doors with hydraulic levelers and dock seals for efficient loading</p>
                    </div>
                    
                    <div class="border-l-4 border-yellow-600 pl-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fire Safety</h3>
                        <p class="text-gray-600">Advanced sprinkler systems, smoke detection, and emergency response protocols</p>
                    </div>
                </div>
            </div>

            <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                <div class="bg-gray-50 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Technology Features</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">RFID and Barcode Scanning</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Automated Storage & Retrieval Systems</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Real-Time Inventory Tracking</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Cloud-Based WMS Integration</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Mobile Device Integration</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">24/7 CCTV Monitoring</span>
                        </div>
                        
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <span class="text-gray-700">Automated Reporting & Analytics</span>
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
                Warehousing <span class="text-red-600">Plans</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Flexible warehousing solutions designed to scale with your business needs.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic Plan -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Basic Storage</h3>
                    <div class="text-4xl font-bold text-gray-900 mb-2">$2.50<span class="text-lg text-gray-600">/sq ft/month</span></div>
                    <p class="text-gray-600">Perfect for small to medium businesses</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Standard storage environment</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Basic inventory management</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Monthly reporting</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Standard security</span>
                    </li>
                </ul>
                
                <button class="w-full bg-gray-900 text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
                    Get Started
                </button>
            </div>

            <!-- Professional Plan -->
            <div class="bg-white rounded-2xl p-8 shadow-xl hover-lift fade-in-up stagger-animation border-2 border-red-600 relative" style="--delay: 0.1s;">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold">Most Popular</span>
                </div>
                
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Professional</h3>
                    <div class="text-4xl font-bold text-gray-900 mb-2">$3.75<span class="text-lg text-gray-600">/sq ft/month</span></div>
                    <p class="text-gray-600">Ideal for growing businesses</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Climate-controlled storage</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Advanced WMS integration</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Real-time inventory tracking</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Pick & pack services included</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">24/7 security monitoring</span>
                    </li>
                </ul>
                
                <button class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors">
                    Get Started
                </button>
            </div>

            <!-- Enterprise Plan -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up stagger-animation" style="--delay: 0.2s;">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise</h3>
                    <div class="text-4xl font-bold text-gray-900 mb-2">Custom<span class="text-lg text-gray-600"> pricing</span></div>
                    <p class="text-gray-600">For large-scale operations</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Dedicated warehouse space</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Custom WMS configuration</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Dedicated account manager</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Value-added services</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">SLA guarantees</span>
                    </li>
                </ul>
                
                <button class="w-full bg-gray-900 text-white py-3 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
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
                Ready to Optimize Your Storage?
            </h2>
            <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                Contact our warehousing experts today to discuss your storage requirements and get a customized solution for your business.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" 
                   class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                    Get Free Consultation
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