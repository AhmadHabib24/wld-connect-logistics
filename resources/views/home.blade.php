@extends('layouts.app')

@section('title', 'WLD Connect Logistics - Global Logistics Solutions')
@section('description', 'Leading logistics company providing warehousing, freight handling, supply chain management, and international shipping services worldwide.')

@section('content')
<!-- Hero Section -->
<section class="relative gradient-bg text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="fade-in-up">
                <h1 class="text-4xl lg:text-6xl font-bold leading-tight mb-6">
                    Global Logistics
                    <span class="text-red-400">Solutions</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 mb-8 leading-relaxed">
                    Connecting businesses worldwide with reliable, efficient, and cost-effective logistics services. Your trusted partner for seamless supply chain management.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('services') }}" 
                       class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift text-center">
                        Explore Services
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-900 transition-all duration-300 text-center">
                        Get Quote
                    </a>
                </div>
            </div>
            <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                <div class="relative">
                    <!-- Hero Illustration with Real Logistics Image -->
                    <div class="bg-white bg-opacity-10 rounded-2xl p-8 backdrop-blur-sm">
                        <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Global Logistics Operations" 
                             class="w-full h-80 object-cover rounded-xl shadow-2xl">
                        
                        <!-- Overlay with animated elements -->
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-red-600/20 rounded-xl"></div>
                        
                        <!-- Floating logistics icons -->
                        <div class="absolute top-4 right-4 opacity-80">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg animate-bounce">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-4 left-4 opacity-80">
                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg animate-pulse">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 right-10 opacity-20">
        <div class="w-20 h-20 border-2 border-white rounded-full animate-pulse"></div>
    </div>
    <div class="absolute bottom-20 left-10 opacity-20">
        <div class="w-16 h-16 border-2 border-red-400 rounded-full animate-bounce"></div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-white py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center fade-in-up">
                <div class="text-4xl lg:text-5xl font-bold text-blue-900 mb-2">500+</div>
                <div class="text-gray-600 font-medium">Global Partners</div>
            </div>
            <div class="text-center fade-in-up stagger-animation" style="--delay: 0.1s;">
                <div class="text-4xl lg:text-5xl font-bold text-red-600 mb-2">50+</div>
                <div class="text-gray-600 font-medium">Countries Served</div>
            </div>
            <div class="text-center fade-in-up stagger-animation" style="--delay: 0.2s;">
                <div class="text-4xl lg:text-5xl font-bold text-blue-900 mb-2">24/7</div>
                <div class="text-gray-600 font-medium">Customer Support</div>
            </div>
            <div class="text-center fade-in-up stagger-animation" style="--delay: 0.3s;">
                <div class="text-4xl lg:text-5xl font-bold text-red-600 mb-2">99.9%</div>
                <div class="text-gray-600 font-medium">On-Time Delivery</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                Our <span class="text-red-600">Services</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Comprehensive logistics solutions tailored to meet your business needs. From warehousing to last-mile delivery, we've got you covered.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service Card 1 -->
            <div class="service-card rounded-2xl p-8 hover-lift fade-in-up stagger-animation" style="--delay: 0.1s;">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Warehousing</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    State-of-the-art storage facilities with advanced inventory management systems for secure and efficient warehousing solutions.
                </p>
                <a href="{{ route('services.warehousing') }}" class="text-red-600 font-semibold hover:text-red-700 transition-colors inline-flex items-center">
                    Learn More 
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service Card 2 -->
            <div class="service-card rounded-2xl p-8 hover-lift fade-in-up stagger-animation" style="--delay: 0.2s;">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">International Shipping</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Global shipping solutions with comprehensive tracking and customs clearance for seamless international commerce.
                </p>
                <a href="{{ route('services.shipping') }}" class="text-red-600 font-semibold hover:text-red-700 transition-colors inline-flex items-center">
                    Learn More 
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service Card 3 -->
            <div class="service-card rounded-2xl p-8 hover-lift fade-in-up stagger-animation" style="--delay: 0.3s;">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Express Delivery</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Fast and reliable courier services with real-time tracking for urgent deliveries and time-sensitive shipments.
                </p>
                <a href="{{ route('services.courier-express') }}" class="text-red-600 font-semibold hover:text-red-700 transition-colors inline-flex items-center">
                    Learn More 
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service Card 4 -->
            <div class="service-card rounded-2xl p-8 hover-lift fade-in-up stagger-animation" style="--delay: 0.4s;">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Supply Chain Management</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    End-to-end supply chain optimization with advanced analytics and strategic planning for maximum efficiency.
                </p>
                <a href="{{ route('services.supply-chain') }}" class="text-red-600 font-semibold hover:text-red-700 transition-colors inline-flex items-center">
                    Learn More 
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service Card 5 -->
            <div class="service-card rounded-2xl p-8 hover-lift fade-in-up stagger-animation" style="--delay: 0.5s;">
                <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Customs Clearance</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Expert customs brokerage services ensuring smooth and compliant international trade operations.
                </p>
                <a href="{{ route('services.customs-clearance') }}" class="text-red-600 font-semibold hover:text-red-700 transition-colors inline-flex items-center">
                    Learn More 
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service Card 6 -->
            <div class="service-card rounded-2xl p-8 hover-lift fade-in-up stagger-animation" style="--delay: 0.6s;">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Last-Mile Delivery</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Efficient final delivery solutions ensuring your packages reach customers safely and on time.
                </p>
                <a href="{{ route('services.last-mile') }}" class="text-red-600 font-semibold hover:text-red-700 transition-colors inline-flex items-center">
                    Learn More 
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="text-center mt-12 fade-in-up">
            <a href="{{ route('services') }}" 
               class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift inline-flex items-center">
                View All Services
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<!-- Why Choose Us -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="fade-in-up">
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-8">
                    Why Choose <span class="text-red-600">WLD Connect</span>?
                </h2>
                
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Reliable & Secure</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Advanced security protocols and reliable handling ensure your cargo arrives safely and on time, every time.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Fast & Efficient</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Streamlined processes and cutting-edge technology enable rapid delivery and efficient logistics operations.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Global Network</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Extensive worldwide network of partners and facilities providing seamless international logistics solutions.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">24/7 Support</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Round-the-clock customer support and real-time tracking keep you informed throughout the shipping process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                <div class="relative">
                    <div class="bg-gradient-to-r from-blue-50 to-red-50 rounded-2xl p-8 backdrop-blur-sm">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Global Logistics Network" 
                             class="w-full h-96 object-cover rounded-xl shadow-2xl">
                        
                        <!-- Overlay with animated elements -->
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-red-600/10 rounded-xl"></div>
                        
                        <!-- Floating logistics badges -->
                        <div class="absolute top-4 right-4 opacity-90">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2 shadow-lg">
                                <div class="text-sm font-semibold text-blue-600">99.9% On-Time</div>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-4 left-4 opacity-90">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2 shadow-lg">
                                <div class="text-sm font-semibold text-red-600">50+ Countries</div>
                            </div>
                        </div>
                        
                        <div class="absolute top-1/2 left-4 opacity-90 transform -translate-y-1/2">
                            <div class="bg-white/90 backdrop-blur-sm rounded-lg px-3 py-2 shadow-lg">
                                <div class="text-sm font-semibold text-green-600">24/7 Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="gradient-bg text-white py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-4xl mx-auto fade-in-up">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                Ready to Optimize Your Supply Chain?
            </h2>
            <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                Get in touch with our logistics experts today and discover how WLD Connect can streamline your operations and reduce costs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" 
                   class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                    Get Free Quote
                </a>
                <a href="tel:+1234567890" 
                   class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-900 transition-all duration-300 inline-flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Call Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection