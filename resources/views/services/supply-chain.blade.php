@extends('layouts.app')

@section('title', 'Contact Us - Supply Chain Management - WLD Connect Logistics')
@section('description', 'Get in touch with our supply chain management experts. Comprehensive logistics solutions,
    inventory optimization, and end-to-end supply chain consulting services.')

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
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <!-- Rotating ring around icon -->
                        <div class="absolute inset-0 border-2 border-red-400/30 rounded-full animate-spin"></div>
                        <!-- Pulsing outer ring -->
                        <div class="absolute inset-0 border-2 border-white/20 rounded-full animate-ping"></div>
                    </div>
                </div>

                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    <span class="text-red-400">Contact Our</span> Supply Chain Experts
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                    Ready to optimize your supply chain? Get in touch with our logistics specialists for comprehensive
                    supply chain management solutions tailored to your business needs.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Information -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <!-- Contact Form -->
                <div class="fade-in-up">
                    <div class="bg-gray-50 rounded-2xl p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">
                                Get Supply Chain Quote
                            </h2>
                        </div>

                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name
                                        *</label>
                                    <input type="text" id="first_name" name="first_name" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name
                                        *</label>
                                    <input type="text" id="last_name" name="last_name" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>

                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company
                                    Name</label>
                                <input type="text" id="company" name="company"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address
                                        *</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone
                                        Number</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>

                            <div>
                                <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Primary Service
                                    Interest *</label>
                                <select id="service" name="service" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                    <option value="">Select a service...</option>
                                    <option value="supply_chain_management">Supply Chain Management</option>
                                    <option value="inventory_optimization">Inventory Optimization</option>
                                    <option value="procurement_consulting">Procurement Consulting</option>
                                    <option value="logistics_planning">Logistics Planning</option>
                                    <option value="vendor_management">Vendor Management</option>
                                    <option value="demand_forecasting">Demand Forecasting</option>
                                    <option value="warehouse_management">Warehouse Management</option>
                                    <option value="transportation_management">Transportation Management</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="industry" class="block text-sm font-medium text-gray-700 mb-2">Industry</label>
                                <select id="industry" name="industry"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                    <option value="">Select your industry...</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="retail">Retail & E-commerce</option>
                                    <option value="automotive">Automotive</option>
                                    <option value="healthcare">Healthcare & Pharmaceuticals</option>
                                    <option value="technology">Technology</option>
                                    <option value="food_beverage">Food & Beverage</option>
                                    <option value="textiles">Textiles & Apparel</option>
                                    <option value="construction">Construction</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Project Details
                                    *</label>
                                <textarea id="message" name="message" rows="4" required
                                    placeholder="Please describe your supply chain challenges, current operations, and what you're looking to achieve..."
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"></textarea>
                            </div>

                            <div class="flex items-start space-x-3">
                                <input type="checkbox" id="consent" name="consent" required
                                    class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="consent" class="text-sm text-gray-600">
                                    I agree to receive communications about supply chain solutions and understand that I can
                                    unsubscribe at any time. *
                                </label>
                            </div>

                            <button type="submit"
                                class="w-full bg-red-600 text-white py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                Send Inquiry
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="space-y-8">
                        <!-- Main Contact Info -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h3>

                            <div class="space-y-6">
                                <div class="flex items-start space-x-4">
                                    <div
                                        class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-900 mb-1">Phone</h4>
                                        <p class="text-gray-600">+1 (555) 123-4567</p>
                                        <p class="text-sm text-gray-500">Mon-Fri 8:00 AM - 6:00 PM EST</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div
                                        class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-900 mb-1">Email</h4>
                                        <p class="text-gray-600">supply-chain@wldconnect.com</p>
                                        <p class="text-sm text-gray-500">Response within 24 hours</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div
                                        class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-gray-900 mb-1">Office Address</h4>
                                        <p class="text-gray-600">1234 Supply Chain Blvd<br>Logistics City, LC 12345</p>
                                        <p class="text-sm text-gray-500">Open for consultations</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Stats -->
                        <div class="grid grid-cols-2 gap-4">
                            <div
                                class="bg-white rounded-lg shadow-md p-6 text-center border-t-4 border-blue-600 hover-lift">
                                <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                                <div class="text-sm text-gray-600">Supply Chains Optimized</div>
                            </div>
                            <div
                                class="bg-white rounded-lg shadow-md p-6 text-center border-t-4 border-green-600 hover-lift">
                                <div class="text-3xl font-bold text-green-600 mb-2">98%</div>
                                <div class="text-sm text-gray-600">Client Satisfaction</div>
                            </div>
                            <div
                                class="bg-white rounded-lg shadow-md p-6 text-center border-t-4 border-red-600 hover-lift">
                                <div class="text-3xl font-bold text-red-600 mb-2">24/7</div>
                                <div class="text-sm text-gray-600">Support Available</div>
                            </div>
                            <div
                                class="bg-white rounded-lg shadow-md p-6 text-center border-t-4 border-purple-600 hover-lift">
                                <div class="text-3xl font-bold text-purple-600 mb-2">15+</div>
                                <div class="text-sm text-gray-600">Years Experience</div>
                            </div>
                        </div>

                        <!-- Emergency Contact -->
                        <div class="bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                                <h4 class="text-lg font-semibold text-red-900">Emergency Supply Chain Support</h4>
                            </div>
                            <p class="text-red-800 mb-3">Need immediate assistance with supply chain disruptions?</p>
                            <a href="tel:+15551234567" class="text-red-600 font-semibold hover:text-red-700">
                                Call Emergency Line: +1 (555) 123-4567
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Supply Chain Services Overview -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Our Supply Chain <span class="text-red-600">Services</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive supply chain management solutions designed to optimize your operations and drive business
                    growth.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Supply Chain Strategy</h3>
                    <p class="text-gray-600">End-to-end supply chain design and optimization to improve efficiency and
                        reduce costs across your entire network.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.1s;">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Inventory Management</h3>
                    <p class="text-gray-600">Smart inventory optimization to reduce carrying costs while maintaining
                        optimal stock levels and service quality.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Vendor Management</h3>
                    <p class="text-gray-600">Strategic supplier relationship management and procurement optimization to
                        improve quality and reduce costs.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.3s;">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Demand Forecasting</h3>
                    <p class="text-gray-600">Advanced analytics and forecasting to accurately predict demand and optimize
                        inventory planning.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.4s;">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Risk Management</h3>
                    <p class="text-gray-600">Comprehensive risk assessment and mitigation strategies to protect your supply
                        chain from disruptions.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.5s;">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Technology Integration</h3>
                    <p class="text-gray-600">Digital transformation solutions including ERP integration, IoT
                        implementation, and automation systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Response Time & Process -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div class="fade-in-up">
                    <h2 class="text-4xl font-bold text-gray-900 mb-8">
                        What to <span class="text-red-600">Expect</span>
                    </h2>

                    <div class="space-y-6">
                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <span class="text-white font-bold">1</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-purple-900 mb-2">Custom Strategy Development</h3>
                                <p class="text-purple-800">We'll develop a tailored supply chain strategy with specific
                                    recommendations and implementation roadmap.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <span class="text-white font-bold">4</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-red-900 mb-2">Implementation & Monitoring</h3>
                                <p class="text-red-800">Ongoing support during implementation with continuous monitoring
                                    and optimization of your supply chain performance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="bg-gray-50 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Response Times</h3>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">General Inquiries</span>
                                </div>
                                <span class="text-green-600 font-semibold">
                                    < 24 hours</span>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Project Quotes</span>
                                </div>
                                <span class="text-yellow-600 font-semibold">2-3 business days</span>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Emergency Support</span>
                                </div>
                                <span class="text-red-600 font-semibold">Immediate</span>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Consultation Scheduling</span>
                                </div>
                                <span class="text-blue-600 font-semibold">Same day</span>
                            </div>
                        </div>

                        <div class="mt-8 p-6 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-xl">
                            <h4 class="text-lg font-bold text-blue-900 mb-3">Free Initial Assessment</h4>
                            <p class="text-blue-800 mb-4">
                                Get a complimentary 30-minute consultation to discuss your supply chain challenges and
                                opportunities.
                            </p>
                            <div class="flex items-center space-x-2 text-blue-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="font-medium">No commitment required</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Locations & Coverage -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Global Supply Chain <span class="text-red-600">Coverage</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our supply chain experts are strategically located to serve clients across multiple regions and time
                    zones.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">North America HQ</h3>
                    <p class="text-gray-600 mb-4">1234 Supply Chain Blvd<br>Logistics City, LC 12345</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +1 (555) 123-4567
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            EST (UTC-5)
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.1s;">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">European Office</h3>
                    <p class="text-gray-600 mb-4">56 Logistics Park<br>London, UK EC1A 1BB</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +44 20 7123 4567
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            GMT (UTC+0)
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Asia Pacific Hub</h3>
                    <p class="text-gray-600 mb-4">789 Supply Tower<br>Singapore 018989</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +65 6123 4567
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            SGT (UTC+8)
                        </div>
                    </div>
                </div>
            </div>

            <!-- Coverage Map Placeholder -->
            <div class="mt-16 fade-in-up">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Service Coverage Areas</h3>
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-blue-600 mb-2">50+</div>
                                <div class="text-gray-600">Countries Served</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-green-600 mb-2">200+</div>
                                <div class="text-gray-600">Cities Covered</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-purple-600 mb-2">24/7</div>
                                <div class="text-gray-600">Global Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Frequently Asked <span class="text-red-600">Questions</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Common questions about our supply chain management services and consultation process.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">How long does a typical supply chain assessment
                            take?</h3>
                        <p class="text-gray-600">A comprehensive supply chain assessment typically takes 2-4 weeks,
                            depending on the complexity and size of your operations. We provide regular updates throughout
                            the process and can accommodate urgent timelines when needed.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up stagger-animation" style="--delay: 0.1s;">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">What industries do you specialize in?</h3>
                        <p class="text-gray-600">We have extensive experience across manufacturing, retail, automotive,
                            healthcare, technology, food & beverage, and many other industries. Our consultants are trained
                            to understand industry-specific challenges and regulations.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up stagger-animation" style="--delay: 0.2s;">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Do you work with small and medium-sized
                            businesses?</h3>
                        <p class="text-gray-600">Absolutely! We offer scalable solutions for businesses of all sizes. Our
                            services can be tailored to fit your budget and requirements, from basic optimization to
                            comprehensive supply chain transformation.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up stagger-animation" style="--delay: 0.3s;">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">What makes your supply chain consulting different?
                        </h3>
                        <p class="text-gray-600">Our approach combines deep industry expertise with cutting-edge technology
                            solutions. We focus on practical, implementable strategies that deliver measurable ROI, and we
                            provide ongoing support to ensure successful execution.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up stagger-animation" style="--delay: 0.4s;">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Can you help with supply chain risk management?
                        </h3>
                        <p class="text-gray-600">Yes, risk management is a core component of our services. We help identify
                            vulnerabilities, develop contingency plans, implement monitoring systems, and create resilient
                            supply chain networks that can adapt to disruptions.</p>
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
                    Take the first step towards a more efficient, resilient, and profitable supply chain. Our experts are
                    ready to help you transform your operations and drive sustainable growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact-form"
                        class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                        Start Your Assessment
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
