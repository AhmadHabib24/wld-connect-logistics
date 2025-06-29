@extends('layouts.app')

@section('title', 'About Us - WLD Connect Logistics')
@section('description', 'Learn about WLD Connect Logistics - your trusted partner for comprehensive logistics solutions
    with years of experience in global supply chain management.')

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
        <div class="absolute top-1/2 right-1/4 opacity-15">
            <div class="w-12 h-12 border-2 border-blue-300 rounded-full animate-ping"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-5xl mx-auto text-center fade-in-up">
                <!-- Icon Section -->
                <div class="flex justify-center mb-8">
                    <div class="relative">
                        <div class="w-24 h-24 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-12 h-12 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <!-- Rotating ring around icon -->
                        <div class="absolute inset-0 border-2 border-red-400/30 rounded-full animate-spin"></div>
                    </div>
                </div>

                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    About <span class="text-red-400">WLD Connect</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 leading-relaxed mb-8 max-w-4xl mx-auto">
                    Your trusted partner in global logistics solutions, connecting businesses worldwide with reliable,
                    efficient, and innovative supply chain services.
                </p>


            </div>
        </div>


    </section>

    <!-- Company Story -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-up">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900">
                            Our <span class="text-red-600">Story</span>
                        </h2>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 border-l-4 border-blue-500">
                            <h3 class="text-lg font-semibold text-blue-900 mb-2">The Beginning</h3>
                            <p class="text-blue-800 leading-relaxed">
                                Founded with a vision to revolutionize global logistics, WLD Connect Logistics has grown
                                from a small regional carrier to a comprehensive logistics solutions provider serving
                                businesses worldwide.
                            </p>
                        </div>

                        <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 border-l-4 border-green-500">
                            <h3 class="text-lg font-semibold text-green-900 mb-2">Our Mission</h3>
                            <p class="text-green-800 leading-relaxed">
                                Our journey began with a simple belief: that every business deserves reliable, efficient,
                                and cost-effective logistics services. Today, we continue to uphold this principle while
                                leveraging cutting-edge technology.
                            </p>
                        </div>

                        <div
                            class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6 border-l-4 border-purple-500">
                            <h3 class="text-lg font-semibold text-purple-900 mb-2">Our Excellence</h3>
                            <p class="text-purple-800 leading-relaxed">
                                From warehousing and freight handling to supply chain optimization and last-mile delivery,
                                we've built our reputation on trust, innovation, and unwavering commitment to customer
                                success.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement badges -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-red-600">
                            <div class="text-2xl font-bold text-red-600">ISO 9001</div>
                            <div class="text-sm text-gray-600">Certified Quality</div>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-4 text-center border-t-4 border-blue-600">
                            <div class="text-2xl font-bold text-blue-600">24/7</div>
                            <div class="text-sm text-gray-600">Customer Support</div>
                        </div>
                    </div>
                </div>

                <div class="fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-blue-50 to-red-50 rounded-2xl p-8 backdrop-blur-sm">
                            <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                                alt="Global Logistics Timeline and Growth"
                                class="w-full h-96 object-cover rounded-xl shadow-2xl">

                            <!-- Overlay with company milestones -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent rounded-xl">
                            </div>

                            <!-- Timeline badges -->
                            <div class="absolute bottom-6 left-6 right-6">
                                <div class="grid grid-cols-4 gap-3">
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-blue-900">2010</div>
                                        <div class="text-xs text-blue-700">Founded</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-green-900">2015</div>
                                        <div class="text-xs text-green-700">International</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-purple-900">2020</div>
                                        <div class="text-xs text-purple-700">Digital Era</div>
                                    </div>
                                    <div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 text-center">
                                        <div class="text-lg font-bold text-red-900">2025</div>
                                        <div class="text-xs text-red-700">Global Leader</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Growth indicator -->
                            <div class="absolute top-4 right-4">
                                <div
                                    class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    Growing
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Values -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Our <span class="text-red-600">Foundation</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To provide innovative, reliable, and cost-effective logistics solutions that enable our clients to
                        focus on their core business while we handle their supply chain challenges with excellence and
                        precision.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.1s;">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To be the world's most trusted logistics partner, setting industry standards for innovation,
                        sustainability, and customer satisfaction while connecting businesses globally through seamless
                        supply chain solutions.
                    </p>
                </div>

                <!-- Values -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover-lift fade-in-up stagger-animation"
                    style="--delay: 0.2s;">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Values</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Integrity, innovation, and customer-centricity drive everything we do. We believe in building
                        lasting partnerships through transparency, reliability, and continuous improvement in all our
                        operations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Our <span class="text-red-600">Leadership</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Meet the experienced professionals leading WLD Connect Logistics toward continued growth and innovation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- CEO -->
                <div class="text-center fade-in-up">
                    <div
                        class="w-32 h-32 bg-gradient-to-r from-blue-100 to-red-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Sarah Johnson</h3>
                    <p class="text-red-600 font-semibold mb-3">Chief Executive Officer</p>
                    <p class="text-gray-600 text-sm">20+ years in logistics and supply chain management. Previously led
                        operations at Fortune 500 companies.</p>
                </div>

                <!-- COO -->
                <div class="text-center fade-in-up stagger-animation" style="--delay: 0.1s;">
                    <div
                        class="w-32 h-32 bg-gradient-to-r from-green-100 to-blue-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Michael Chen</h3>
                    <p class="text-red-600 font-semibold mb-3">Chief Operating Officer</p>
                    <p class="text-gray-600 text-sm">Expert in operational excellence and process optimization with
                        extensive international experience.</p>
                </div>

                <!-- CTO -->
                <div class="text-center fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div
                        class="w-32 h-32 bg-gradient-to-r from-purple-100 to-pink-100 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Emily Rodriguez</h3>
                    <p class="text-red-600 font-semibold mb-3">Chief Technology Officer</p>
                    <p class="text-gray-600 text-sm">Technology innovator specializing in AI-driven logistics solutions and
                        digital transformation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats & Achievements -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    By the <span class="text-red-600">Numbers</span>
                </h2>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center fade-in-up">
                    <div class="text-5xl font-bold text-red-600 mb-2">15+</div>
                    <div class="text-gray-600 font-medium">Years of Experience</div>
                </div>
                <div class="text-center fade-in-up stagger-animation" style="--delay: 0.1s;">
                    <div class="text-5xl font-bold text-blue-600 mb-2">500+</div>
                    <div class="text-gray-600 font-medium">Global Partners</div>
                </div>
                <div class="text-center fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="text-5xl font-bold text-red-600 mb-2">50+</div>
                    <div class="text-gray-600 font-medium">Countries Served</div>
                </div>
                <div class="text-center fade-in-up stagger-animation" style="--delay: 0.3s;">
                    <div class="text-5xl font-bold text-blue-600 mb-2">1M+</div>
                    <div class="text-gray-600 font-medium">Shipments Delivered</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications & Awards -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Certifications & <span class="text-red-600">Awards</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our commitment to excellence is recognized by industry leaders and certification bodies worldwide.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center fade-in-up">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900">ISO 9001:2015</h4>
                    <p class="text-sm text-gray-600">Quality Management</p>
                </div>

                <div class="text-center fade-in-up stagger-animation" style="--delay: 0.1s;">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900">CTPAT Certified</h4>
                    <p class="text-sm text-gray-600">Security Standards</p>
                </div>

                <div class="text-center fade-in-up stagger-animation" style="--delay: 0.2s;">
                    <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900">Excellence Award</h4>
                    <p class="text-sm text-gray-600">2024 Logistics Leader</p>
                </div>

                <div class="text-center fade-in-up stagger-animation" style="--delay: 0.3s;">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900">Green Logistics</h4>
                    <p class="text-sm text-gray-600">Sustainability Certified</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="gradient-bg text-white py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="max-w-4xl mx-auto fade-in-up">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                    Ready to Partner with Us?
                </h2>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Join hundreds of satisfied clients who trust WLD Connect Logistics for their supply chain needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}"
                        class="bg-red-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-red-700 transition-all duration-300 hover-lift">
                        Get Started Today
                    </a>
                    <a href="{{ route('services') }}"
                        class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-blue-900 transition-all duration-300">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
