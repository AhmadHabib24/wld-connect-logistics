@extends('layouts.app')

@section('title', 'Contact Us - WLD Connect Logistics')
@section('description', 'Get in touch with WLD Connect Logistics for all your logistics needs. Contact our expert team
    for quotes, consultations, and customer support.')

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
        <div class="absolute top-1/2 left-1/4 opacity-15">
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
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <!-- Rotating ring around icon -->
                        <div class="absolute inset-0 border-2 border-red-400/30 rounded-full animate-spin"></div>
                        <!-- Pulsing outer ring -->
                        <div class="absolute inset-0 border-2 border-white/20 rounded-full animate-ping"></div>
                    </div>
                </div>

                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    Contact <span class="text-red-400">Us</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed">
                    Ready to optimize your logistics? Get in touch with our expert team for personalized solutions and
                    exceptional service.
                </p>

                <!-- Quick Contact Icons -->
                <div class="flex justify-center gap-6 mt-8">
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2">
                        <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="text-blue-100 text-sm">Call Us</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2">
                        <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <span class="text-blue-100 text-sm">Chat</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-lg px-4 py-2">
                        <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-blue-100 text-sm">Visit</span>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Contact Form & Info -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div class="fade-in-up">
                    <h2 class="text-4xl font-bold text-gray-900 mb-8">
                        Get a <span class="text-red-600">Free Quote</span>
                    </h2>

                    <form class="space-y-6" action="#" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name
                                    *</label>
                                <input type="text" id="first_name" name="first_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition-colors">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name
                                    *</label>
                                <input type="text" id="last_name" name="last_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition-colors">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address
                                *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition-colors">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition-colors">
                        </div>

                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                            <input type="text" id="company" name="company"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition-colors">
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interested
                                In</label>
                            <select id="service" name="service"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition-colors">
                                <option value="">Select a service</option>
                                <option value="warehousing">Warehousing</option>
                                <option value="shipping">International Shipping</option>
                                <option value="freight">Freight & Cargo Handling</option>
                                <option value="supply-chain">Supply Chain Management</option>
                                <option value="courier">Courier & Express Delivery</option>
                                <option value="customs">Customs Clearance</option>
                                <option value="distribution">Distribution & Fulfillment</option>
                                <option value="last-mile">Last-Mile Delivery</option>
                                <option value="palletizing">Palletizing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required
                                placeholder="Please describe your logistics requirements, including origin/destination, cargo details, timeline, and any special handling needs..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent transition-colors resize-vertical"></textarea>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="newsletter" name="newsletter"
                                class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500">
                            <label for="newsletter" class="ml-2 text-sm text-gray-700">
                                Subscribe to our newsletter for logistics insights and updates
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <h2 class="text-4xl font-bold text-gray-900 mb-8">
                        Get in <span class="text-red-600">Touch</span>
                    </h2>

                    <div class="space-y-8">
                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Phone</h3>
                                <p class="text-gray-600 mb-2">
                                    <a href="tel:+1-800-555-0123" class="hover:text-red-600 transition-colors">+1 (800)
                                        555-0123</a>
                                </p>
                                <p class="text-sm text-gray-500">Mon-Fri: 8:00 AM - 6:00 PM EST</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                                <p class="text-gray-600 mb-1">
                                    <a href="mailto:info@wldconnect.com"
                                        class="hover:text-red-600 transition-colors">info@wldconnect.com</a>
                                </p>
                                <p class="text-gray-600 mb-1">
                                    <a href="mailto:quotes@wldconnect.com"
                                        class="hover:text-red-600 transition-colors">quotes@wldconnect.com</a>
                                </p>
                                <p class="text-sm text-gray-500">24/7 response time</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Headquarters</h3>
                                <p class="text-gray-600">
                                    123 Logistics Boulevard<br>
                                    Business District<br>
                                    New York, NY 10001<br>
                                    United States
                                </p>
                            </div>
                        </div>

                        <!-- Emergency Contact -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">24/7 Emergency</h3>
                                <p class="text-gray-600 mb-2">
                                    <a href="tel:+1-800-555-HELP" class="hover:text-red-600 transition-colors">+1 (800)
                                        555-HELP</a>
                                </p>
                                <p class="text-sm text-gray-500">For urgent shipment issues</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white hover:bg-blue-700 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center text-white hover:bg-blue-900 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white hover:bg-red-700 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Locations -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Our <span class="text-red-600">Locations</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Strategically located offices and warehouses worldwide to serve you better.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- North America -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">North America</h3>
                    <div class="space-y-3 text-gray-600">
                        <p><strong>New York (HQ)</strong><br>123 Logistics Boulevard</p>
                        <p><strong>Los Angeles</strong><br>456 Pacific Trade Center</p>
                        <p><strong>Chicago</strong><br>789 Midwest Distribution Hub</p>
                    </div>
                </div>

                <!-- Europe -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.1s;">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Europe</h3>
                    <div class="space-y-3 text-gray-600">
                        <p><strong>London</strong><br>321 Thames Business Park</p>
                        <p><strong>Hamburg</strong><br>654 Port Industrial Zone</p>
                        <p><strong>Amsterdam</strong><br>987 European Gateway</p>
                    </div>
                </div>

                <!-- Asia Pacific -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Asia Pacific</h3>
                    <div class="space-y-3 text-gray-600">
                        <p><strong>Singapore</strong><br>159 Maritime Plaza</p>
                        <p><strong>Hong Kong</strong><br>753 International Commerce Centre</p>
                        <p><strong>Tokyo</strong><br>852 Asia Trade Complex</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16 fade-in-up">
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">
                        Frequently Asked <span class="text-red-600">Questions</span>
                    </h2>
                    <p class="text-xl text-gray-600">
                        Quick answers to common questions about our logistics services.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="border border-gray-200 rounded-lg fade-in-up">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors"
                            onclick="toggleFAQ('faq1')">
                            <span class="text-lg font-semibold text-gray-900">How do I get a shipping quote?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" id="faq1-arrow"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4" id="faq1-content">
                            <p class="text-gray-600">You can get a free quote by filling out our contact form above,
                                calling us directly, or emailing quotes@wldconnect.com. Please include origin/destination,
                                cargo details, weight/dimensions, and timeline for accurate pricing.</p>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-lg fade-in-up stagger-animation" style="--delay: 0.1s;">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors"
                            onclick="toggleFAQ('faq2')">
                            <span class="text-lg font-semibold text-gray-900">What countries do you ship to?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" id="faq2-arrow"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4" id="faq2-content">
                            <p class="text-gray-600">We provide shipping services to over 50 countries worldwide. Our
                                global network covers North America, Europe, Asia Pacific, and many other regions. Contact
                                us for specific destination availability.</p>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-lg fade-in-up stagger-animation" style="--delay: 0.2s;">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors"
                            onclick="toggleFAQ('faq3')">
                            <span class="text-lg font-semibold text-gray-900">Do you handle customs clearance?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" id="faq3-arrow"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4" id="faq3-content">
                            <p class="text-gray-600">Yes, we provide comprehensive customs clearance services including
                                documentation preparation, duty calculations, and regulatory compliance. Our experienced
                                customs brokers ensure smooth international shipments.</p>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-lg fade-in-up stagger-animation" style="--delay: 0.3s;">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors"
                            onclick="toggleFAQ('faq4')">
                            <span class="text-lg font-semibold text-gray-900">Can I track my shipment in real-time?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" id="faq4-arrow"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4" id="faq4-content">
                            <p class="text-gray-600">Absolutely! We provide real-time tracking for all shipments through
                                our online portal and mobile app. You'll receive updates at key milestones and can track
                                your cargo 24/7.</p>
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-lg fade-in-up stagger-animation" style="--delay: 0.4s;">
                        <button
                            class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors"
                            onclick="toggleFAQ('faq5')">
                            <span class="text-lg font-semibold text-gray-900">What types of cargo do you handle?</span>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" id="faq5-arrow"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-4" id="faq5-content">
                            <p class="text-gray-600">We handle various cargo types including general freight,
                                temperature-sensitive goods, hazardous materials, oversized cargo, and high-value items. Our
                                specialized handling ensures safe transportation for all cargo types.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleFAQ(id) {
            const content = document.getElementById(id + '-content');
            const arrow = document.getElementById(id + '-arrow');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                arrow.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                arrow.style.transform = 'rotate(0deg)';
            }
        }
    </script>
@endsection
