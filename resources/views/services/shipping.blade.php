@extends('layouts.app')

@section('title', 'Contact Us - Local & International Shipping - WLD Connect Logistics')
@section('description', 'Get in touch with our shipping experts for reliable local and international shipping solutions.
    Fast, secure, and cost-effective delivery services worldwide.')

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
                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                            </svg>
                        </div>
                        <!-- Rotating ring around icon -->
                        <div class="absolute inset-0 border-2 border-red-400/30 rounded-full animate-spin"></div>
                        <!-- Pulsing outer ring -->
                        <div class="absolute inset-0 border-2 border-white/20 rounded-full animate-ping"></div>
                    </div>
                </div>

                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    <span class="text-red-400">Global Shipping</span> Solutions at Your Fingertips
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8">
                    Ready to ship locally or internationally? Connect with our shipping specialists for reliable, fast, and
                    cost-effective delivery solutions that connect your business to the world.
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
                                        d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2v0a2 2 0 01-2-2v-2a2 2 0 00-2-2H8" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">
                                Get Shipping Quote
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
                                <label for="shipping_type" class="block text-sm font-medium text-gray-700 mb-2">Shipping
                                    Service Type *</label>
                                <select id="shipping_type" name="shipping_type" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                    <option value="">Select shipping service...</option>
                                    <option value="local_delivery">Local Delivery & Distribution</option>
                                    <option value="domestic_shipping">Domestic Shipping</option>
                                    <option value="international_express">International Express</option>
                                    <option value="international_standard">International Standard</option>
                                    <option value="freight_shipping">Freight Shipping</option>
                                    <option value="specialized_cargo">Specialized Cargo</option>
                                    <option value="ecommerce_fulfillment">E-commerce Fulfillment</option>
                                    <option value="bulk_shipping">Bulk Shipping Solutions</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="origin" class="block text-sm font-medium text-gray-700 mb-2">Shipping From
                                        (Origin) *</label>
                                    <input type="text" id="origin" name="origin" required
                                        placeholder="City, State, Country"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="destination" class="block text-sm font-medium text-gray-700 mb-2">Shipping
                                        To (Destination) *</label>
                                    <input type="text" id="destination" name="destination" required
                                        placeholder="City, State, Country"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="weight" class="block text-sm font-medium text-gray-700 mb-2">Package
                                        Weight</label>
                                    <input type="text" id="weight" name="weight" placeholder="e.g., 5 kg"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="dimensions"
                                        class="block text-sm font-medium text-gray-700 mb-2">Dimensions</label>
                                    <input type="text" id="dimensions" name="dimensions" placeholder="L x W x H (cm)"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                <div>
                                    <label for="package_count" class="block text-sm font-medium text-gray-700 mb-2">Number
                                        of Packages</label>
                                    <input type="number" id="package_count" name="package_count" min="1"
                                        placeholder="1"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>

                            <div>
                                <label for="cargo_type" class="block text-sm font-medium text-gray-700 mb-2">Cargo
                                    Type</label>
                                <select id="cargo_type" name="cargo_type"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                    <option value="">Select cargo type...</option>
                                    <option value="general">General Merchandise</option>
                                    <option value="documents">Documents & Papers</option>
                                    <option value="electronics">Electronics & Technology</option>
                                    <option value="fragile">Fragile Items</option>
                                    <option value="perishable">Perishable Goods</option>
                                    <option value="hazardous">Hazardous Materials</option>
                                    <option value="oversized">Oversized Items</option>
                                    <option value="valuable">High-Value Items</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="urgency" class="block text-sm font-medium text-gray-700 mb-2">Delivery
                                        Urgency *</label>
                                    <select id="urgency" name="urgency" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                        <option value="">Select urgency...</option>
                                        <option value="same_day">Same Day</option>
                                        <option value="next_day">Next Day</option>
                                        <option value="2_3_days">2-3 Days</option>
                                        <option value="standard">Standard (5-7 days)</option>
                                        <option value="economy">Economy (7-14 days)</option>
                                        <option value="flexible">Flexible</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="frequency" class="block text-sm font-medium text-gray-700 mb-2">Shipping
                                        Frequency</label>
                                    <select id="frequency" name="frequency"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                        <option value="">Select frequency...</option>
                                        <option value="one_time">One-time Shipment</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="quarterly">Quarterly</option>
                                        <option value="ongoing">Ongoing Contract</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Shipping
                                    Requirements & Special Instructions *</label>
                                <textarea id="message" name="message" rows="4" required
                                    placeholder="Describe your shipping needs, special handling requirements, delivery preferences, and any other important details..."
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"></textarea>
                            </div>

                            <div class="flex items-start space-x-3">
                                <input type="checkbox" id="consent" name="consent" required
                                    class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="consent" class="text-sm text-gray-600">
                                    I agree to receive communications about shipping services and understand that I can
                                    unsubscribe at any time. *
                                </label>
                            </div>

                            <button type="submit"
                                class="w-full bg-red-600 text-white py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                Get Shipping Quote
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="space-y-8">
                        <!-- Main Contact Info -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Secure & Special Cargo</h3>
                            <p class="text-gray-600">Specialized handling for high-value, fragile, hazardous, and
                                temperature-sensitive shipments with enhanced security protocols.</p>
                        </div>

                        <div class="bg-white rounded-xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                            style="--delay: 0.5s;">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Real-Time Tracking</h3>
                            <p class="text-gray-600">Advanced tracking technology with live updates, delivery
                                notifications, and comprehensive shipment visibility throughout the journey.</p>
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
                                <h3 class="text-xl font-bold text-blue-900 mb-2">Instant Quote Generation</h3>
                                <p class="text-blue-800">Receive competitive shipping quotes within minutes based on your
                                    specific requirements and destination.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <span class="text-white font-bold">2</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-green-900 mb-2">Pickup & Processing</h3>
                                <p class="text-green-800">Convenient pickup scheduling with professional packaging and
                                    documentation handling for seamless processing.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <span class="text-white font-bold">3</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-purple-900 mb-2">Live Tracking</h3>
                                <p class="text-purple-800">Real-time shipment tracking with regular updates and
                                    notifications throughout the delivery journey.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start space-x-4 bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6 hover-lift">
                            <div
                                class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <span class="text-white font-bold">4</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-red-900 mb-2">Secure Delivery</h3>
                                <p class="text-red-800">Safe and timely delivery with proof of delivery confirmation and
                                    customer satisfaction guarantee.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="bg-gray-50 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Shipping Response Times</h3>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Quote Requests</span>
                                </div>
                                <span class="text-green-600 font-semibold">
                                    < 15 minutes</span>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Pickup Scheduling</span>
                                </div>
                                <span class="text-blue-600 font-semibold">Same day</span>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Local Delivery</span>
                                </div>
                                <span class="text-yellow-600 font-semibold">4-24 hours</span>
                            </div>

                            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm">
                                <div class="flex items-center space-x-3">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <span class="text-gray-700 font-medium">Emergency Shipping</span>
                                </div>
                                <span class="text-red-600 font-semibold">Immediate</span>
                            </div>
                        </div>

                        <div class="mt-8 p-6 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-xl">
                            <h4 class="text-lg font-bold text-blue-900 mb-3">Free Shipping Consultation</h4>
                            <p class="text-blue-800 mb-4">
                                Get expert advice on the best shipping solutions for your specific needs with our
                                complimentary consultation service.
                            </p>
                            <div class="flex items-center space-x-2 text-blue-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="font-medium">No shipping commitment required</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Coverage & Network -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Global Shipping <span class="text-red-600">Network</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our extensive shipping network spans across continents, connecting your business to customers worldwide
                    with reliable and efficient delivery services.
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
                    <h3 class="text-xl font-bold text-gray-900 mb-4">North America Hub</h3>
                    <p class="text-gray-600 mb-4">1234 Global Shipping Hub<br>Logistics City, LC 12345</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +1 (555) SHIP-NOW
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
                    <h3 class="text-xl font-bold text-gray-900 mb-4">European Gateway</h3>
                    <p class="text-gray-600 mb-4">56 International Shipping Centre<br>London, UK EC1A 1BB</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +44 20 7123 SHIP
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
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Asia Pacific Center</h3>
                    <p class="text-gray-600 mb-4">789 Shipping Express Tower<br>Singapore 018989</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +65 6123 SHIP
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

            <!-- Global Coverage Stats -->
            <div class="mt-16 fade-in-up">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Global Shipping Reach</h3>
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-8">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                            <div>
                                <div class="text-3xl font-bold text-blue-600 mb-2">220+</div>
                                <div class="text-gray-600">Countries & Territories</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-green-600 mb-2">50,000+</div>
                                <div class="text-gray-600">Delivery Locations</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-purple-600 mb-2">500+</div>
                                <div class="text-gray-600">Partner Carriers</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-red-600 mb-2">24/7</div>
                                <div class="text-gray-600">Global Operations</div>
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
                    Common questions about our local and international shipping services, pricing, and delivery options.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">What shipping destinations do you cover?</h3>
                        <p class="text-gray-600">We provide shipping services to over 220 countries and territories
                            worldwide, including express delivery to major cities and standard shipping to remote locations.
                            Our network covers North America, Europe, Asia Pacific, Latin America, Africa, and the Middle
                            East.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up stagger-animation" style="--delay: 0.1s;">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">How do you calculate shipping costs?</h3>
                        <p class="text-gray-600">Shipping costs are calculated based on package weight, dimensions,
                            destination, delivery speed, and service type. We offer competitive rates with transparent
                            pricing and no hidden fees. Use our online calculator or contact us for a detailed quote.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up stagger-animation" style="--delay: 0.2s;">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Can you handle special cargo requirements?</h3>
                        <p class="text-gray-600">Yes, we specialize in handling fragile items, hazardous materials,
                            temperature-sensitive goods, high-value items, and oversized cargo. Our team provides
                            specialized packaging and handling protocols to ensure safe delivery.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up stagger-animation" style="--delay: 0.3s;">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">What tracking options are available?</h3>
                        <p class="text-gray-600">All shipments include real-time tracking with live updates, delivery
                            notifications, and estimated arrival times. You can track your packages online, via mobile app,
                            or receive SMS/email updates throughout the delivery journey.</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-6 fade-in-up stagger-animation" style="--delay: 0.4s;">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Do you provide customs clearance support?</h3>
                        <p class="text-gray-600">Yes, we offer comprehensive customs clearance services for international
                            shipments, including documentation preparation, duty calculation, and regulatory compliance to
                            ensure smooth cross-border delivery.</p>
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
                    Ready to Ship Anywhere in the World?
                </h2>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Experience fast, reliable, and cost-effective shipping solutions that connect your business to customers
                    worldwide. Get started with a free quote today.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact-form"
                        class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                        Get Shipping Quote
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
