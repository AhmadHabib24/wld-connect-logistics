<!-- Industries We Serve -->
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
                <span class="text-red-400">palletizing</span> Services
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
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Industries We Serve
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Our palletizing expertise spans across multiple industries, each with unique requirements and standards.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Industry 1 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-blue-200 transition-colors">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Manufacturing</h3>
                <p class="text-gray-600 leading-relaxed">
                    Raw materials, components, and finished goods palletizing for manufacturing facilities with focus on production line efficiency.
                </p>
            </div>

            <!-- Industry 2 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-green-200 transition-colors">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Retail & E-commerce</h3>
                <p class="text-gray-600 leading-relaxed">
                    Consumer goods, apparel, and e-commerce fulfillment with emphasis on order accuracy and fast turnaround times.
                </p>
            </div>

            <!-- Industry 3 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-yellow-200 transition-colors">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Food & Beverage</h3>
                <p class="text-gray-600 leading-relaxed">
                    Temperature-controlled palletizing for perishable goods with strict hygiene and safety protocols.
                </p>
            </div>

            <!-- Industry 4 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-red-200 transition-colors">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Pharmaceutical</h3>
                <p class="text-gray-600 leading-relaxed">
                    Specialized handling for pharmaceutical products with compliance to regulatory standards and contamination prevention.
                </p>
            </div>

            <!-- Industry 5 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-purple-200 transition-colors">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Automotive</h3>
                <p class="text-gray-600 leading-relaxed">
                    Heavy-duty palletizing for automotive parts and components with precision handling and damage prevention.
                </p>
            </div>

            <!-- Industry 6 -->
            <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 group">
                <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mb-6 group-hover:bg-indigo-200 transition-colors">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Construction Materials</h3>
                <p class="text-gray-600 leading-relaxed">
                    Heavy construction materials palletizing with emphasis on load stability and safety protocols.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Our Track Record
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Numbers that speak to our expertise and commitment to excellence in palletizing services.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Stat 1 -->
            <div class="text-center group">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" data-counter="50000">50K+</div>
                <div class="text-xl text-gray-600">Pallets Processed</div>
                <div class="text-sm text-gray-500 mt-2">Monthly</div>
            </div>

            <!-- Stat 2 -->
            <div class="text-center group">
                <div class="bg-gradient-to-br from-green-500 to-green-600 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" data-counter="24">24/7</div>
                <div class="text-xl text-gray-600">Operations</div>
                <div class="text-sm text-gray-500 mt-2">Round the Clock</div>
            </div>

            <!-- Stat 3 -->
            <div class="text-center group">
                <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" data-counter="99">99.8%</div>
                <div class="text-xl text-gray-600">Accuracy Rate</div>
                <div class="text-sm text-gray-500 mt-2">Quality Guaranteed</div>
            </div>

            <!-- Stat 4 -->
            <div class="text-center group">
                <div class="bg-gradient-to-br from-red-500 to-red-600 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2" data-counter="500">500+</div>
                <div class="text-xl text-gray-600">Happy Clients</div>
                <div class="text-sm text-gray-500 mt-2">Worldwide</div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section id="quote" class="py-20 bg-gradient-to-r from-blue-900 via-purple-900 to-blue-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-3xl p-8 md:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        Get Your Free Quote
                    </h2>
                    <p class="text-xl text-blue-100 leading-relaxed">
                        Tell us about your palletizing requirements and we'll provide a customized solution with competitive pricing.
                    </p>
                </div>

                <form class="grid grid-cols-1 md:grid-cols-2 gap-6" id="quote-form">
                    <div>
                        <label class="block text-white text-sm font-semibold mb-2">Full Name *</label>
                        <input type="text" name="name" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:border-yellow-400 focus:bg-opacity-30 transition-all duration-300" placeholder="Your full name" required>
                    </div>
                    <div>
                        <label class="block text-white text-sm font-semibold mb-2">Email Address *</label>
                        <input type="email" name="email" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:border-yellow-400 focus:bg-opacity-30 transition-all duration-300" placeholder="your@email.com" required>
                    </div>
                    <div>
                        <label class="block text-white text-sm font-semibold mb-2">Phone Number</label>
                        <input type="tel" name="phone" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:border-yellow-400 focus:bg-opacity-30 transition-all duration-300" placeholder="+92 300 1234567">
                    </div>
                    <div>
                        <label class="block text-white text-sm font-semibold mb-2">Company Name</label>
                        <input type="text" name="company" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:border-yellow-400 focus:bg-opacity-30 transition-all duration-300" placeholder="Your company">
                    </div>
                    <div>
                        <label class="block text-white text-sm font-semibold mb-2">Service Type *</label>
                        <select name="service_type" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white focus:outline-none focus:border-yellow-400 focus:bg-opacity-30 transition-all duration-300" required>
                            <option value="" class="text-gray-900">Select service type</option>
                            <option value="manual" class="text-gray-900">Manual Palletizing</option>
                            <option value="automated" class="text-gray-900">Automated Palletizing</option>
                            <option value="depalletizing" class="text-gray-900">Depalletizing</option>
                            <option value="custom" class="text-gray-900">Custom Solution</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-white text-sm font-semibold mb-2">Volume (Pallets/Month)</label>
                        <select name="volume" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white focus:outline-none focus:border-yellow-400 focus:bg-opacity-30 transition-all duration-300">
                            <option value="" class="text-gray-900">Select volume</option>
                            <option value="1-50" class="text-gray-900">1-50 pallets</option>
                            <option value="51-200" class="text-gray-900">51-200 pallets</option>
                            <option value="201-500" class="text-gray-900">201-500 pallets</option>
                            <option value="500+" class="text-gray-900">500+ pallets</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-white text-sm font-semibold mb-2">Project Details</label>
                        <textarea name="details" rows="4" class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-white placeholder-opacity-70 focus:outline-none focus:border-yellow-400 focus:bg-opacity-30 transition-all duration-300 resize-none" placeholder="Tell us about your specific requirements, product types, dimensions, weight, timeline, etc."></textarea>
                    </div>
                    <div class="md:col-span-2 text-center">
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-8 py-4 rounded-lg font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl">
                            Get Free Quote Now
                        </button>
                        <p class="text-blue-100 text-sm mt-4">
                            We'll respond within 24 hours with a detailed proposal
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Get answers to common questions about our palletizing services and processes.
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(1)">
                        <h3 class="text-xl font-bold text-gray-900">What types of products can be palletized?</h3>
                        <svg id="faq-icon-1" class="w-6 h-6 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-content-1" class="hidden px-8 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            We can palletize virtually any type of product including boxes, bags, bottles, cans, drums, irregular shapes, and fragile items. Our team has experience with everything from consumer goods to industrial materials, pharmaceuticals, food products, and automotive parts.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(2)">
                        <h3 class="text-xl font-bold text-gray-900">How do you ensure load stability during transport?</h3>
                        <svg id="faq-icon-2" class="w-6 h-6 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-content-2" class="hidden px-8 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            We use proven palletizing patterns, proper weight distribution techniques, and appropriate securing methods including stretch wrapping, strapping, and corner protectors. Our patterns are designed to create interlocking structures that minimize shifting during transport.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(3)">
                        <h3 class="text-xl font-bold text-gray-900">What is the typical turnaround time for palletizing services?</h3>
                        <svg id="faq-icon-3" class="w-6 h-6 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-content-3" class="hidden px-8 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Turnaround time depends on volume and complexity. Standard palletizing can typically be completed within 24-48 hours. For urgent requests or large volumes, we offer expedited services with same-day completion available.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(4)">
                        <h3 class="text-xl font-bold text-gray-900">Do you provide pallets or do I need to supply them?</h3>
                        <svg id="faq-icon-4" class="w-6 h-6 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-content-4" class="hidden px-8 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            We offer both options. We can supply high-quality pallets in various sizes and materials (wood, plastic, metal) or work with pallets you provide. We'll recommend the best pallet type based on your product and shipping requirements.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors" onclick="toggleFAQ(5)">
                        <h3 class="text-xl font-bold text-gray-900">Can you handle temperature-sensitive products?</h3>
                        <svg id="faq-icon-5" class="w-6 h-6 text-gray-500 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="faq-content-5" class="hidden px-8 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Yes, we have climate-controlled facilities and can handle frozen, refrigerated, and temperature-sensitive products. Our team follows strict protocols to maintain cold chain integrity throughout the palletizing process.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-red-600 to-red-700">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Ready to Optimize Your Palletizing?
        </h2>
        <p class="text-xl text-red-100 mb-8 max-w-3xl mx-auto leading-relaxed">
            Contact our palletizing experts today and discover how we can improve your logistics efficiency, reduce costs, and ensure product safety.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+92-XXX-XXXXXXX" class="bg-white text-red-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                📞 Call Now
            </a>
            <a href="mailto:info@wldconnectlogistics.com" class="border-2 border-white text-white hover:bg-white hover:text-red-600 px-8 py-4 rounded-lg font-bold text-lg transition-all duration-300 transform hover:scale-105">
                ✉️ Email Us
            </a>
            <a href="{{ route('contact') }}" class="bg-yellow-500 hover:bg-yellow-600 text-gray-900 px-8 py-4 rounded-lg font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                Get Started
            </a>
        </div>
    </div>
</section>
@endsection


