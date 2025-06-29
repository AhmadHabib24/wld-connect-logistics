@extends('layouts.app')

@section('title', 'Privacy Policy - WLD Connect Logistics')
@section('description', 'Learn about how WLD Connect Logistics collects, uses, and protects your personal information in
    our comprehensive privacy policy.')

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

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center fade-in-up">
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm">
                        <svg class="w-10 h-10 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    Privacy <span class="text-red-400">Policy</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    Your privacy is important to us. Learn how we collect, use, and protect your information.
                </p>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="bg-gray-50 py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <!-- Last Updated Badge -->
                <div class="mb-12 fade-in-up">
                    <div class="bg-white rounded-lg shadow-sm border-l-4 border-red-600 p-6">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-900">Last Updated</p>
                                <p class="text-gray-600">{{ date('F d, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-16 fade-in-up">
                    <!-- Introduction -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Introduction</h2>
                        </div>
                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                WLD Connect Logistics Limited ("we," "our," or "us") is committed to protecting your
                                privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your
                                information when you visit our website or use our logistics services.
                            </p>
                            <div class="bg-blue-50 border-l-4 border-blue-400 p-6 rounded-r-lg">
                                <p class="text-blue-800 font-medium">
                                    Please read this Privacy Policy carefully. If you do not agree with the terms of this
                                    Privacy Policy, please do not access our website or use our services.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Information We Collect -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Information We Collect</h2>
                        </div>

                        <div class="grid lg:grid-cols-2 gap-8">
                            <!-- Personal Information -->
                            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6">
                                <h3 class="text-2xl font-semibold text-purple-900 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Personal Information
                                </h3>
                                <p class="text-purple-800 mb-4">
                                    We may collect personal information that you voluntarily provide when you:
                                </p>
                                <ul class="space-y-2 text-purple-700">
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-purple-500 mr-2 mt-1 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Register for an account or use our services
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-purple-500 mr-2 mt-1 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Request a quote or consultation
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-purple-500 mr-2 mt-1 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Contact us via email, phone, or forms
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-purple-500 mr-2 mt-1 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Subscribe to our communications
                                    </li>
                                </ul>
                            </div>

                            <!-- Automatically Collected -->
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6">
                                <h3 class="text-2xl font-semibold text-orange-900 mb-4 flex items-center">
                                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Automatically Collected
                                </h3>
                                <p class="text-orange-800 mb-4">
                                    When you visit our website, we automatically collect:
                                </p>
                                <ul class="space-y-2 text-orange-700">
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-orange-500 mr-2 mt-1 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        IP address and browser information
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-orange-500 mr-2 mt-1 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Device and operating system details
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-orange-500 mr-2 mt-1 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Pages visited and time spent
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-4 h-4 text-orange-500 mr-2 mt-1 flex-shrink-0" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        Cookies and tracking technologies
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- How We Use Information -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">How We Use Your Information</h2>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 text-center">
                                <div
                                    class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-blue-900 mb-2">Service Delivery</h3>
                                <p class="text-blue-700 text-sm">Providing logistics services, processing shipments, and
                                    tracking deliveries</p>
                            </div>

                            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center">
                                <div
                                    class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-green-900 mb-2">Communication</h3>
                                <p class="text-green-700 text-sm">Responding to inquiries and providing customer support
                                </p>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 text-center">
                                <div
                                    class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-purple-900 mb-2">Improvement</h3>
                                <p class="text-purple-700 text-sm">Analyzing usage patterns and improving our services</p>
                            </div>
                        </div>
                    </section>

                    <!-- Data Security -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Data Security</h2>
                        </div>

                        <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-xl p-8">
                            <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                We implement appropriate technical and organizational security measures to protect your
                                personal information against unauthorized access, alteration, disclosure, or destruction.
                            </p>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Encryption of sensitive data</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Regular security assessments</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Access controls and training</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div
                                        class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-gray-700 font-medium">Secure backup systems</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Your Rights -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Your Rights and Choices</h2>
                        </div>

                        <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-8">
                            <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                Depending on your location, you may have certain rights regarding your personal information:
                            </p>

                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                        </svg>
                                        <span class="font-medium text-gray-800">Data Portability</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <div class="flex items-center space-x-3">
                                        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636M5.636 18.364L18.364 5.636" />
                                        </svg>
                                        <span class="font-medium text-gray-800">Object to Processing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Additional Sections -->
                    <div class="grid lg:grid-cols-2 gap-8">
                        <!-- Cookies -->
                        <section class="bg-white rounded-2xl shadow-lg p-8 hover-lift">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Cookies & Tracking</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                We use cookies and similar tracking technologies to enhance your browsing experience and
                                analyze website usage. You can control cookie preferences through your browser settings.
                            </p>
                        </section>

                        <!-- Data Retention -->
                        <section class="bg-white rounded-2xl shadow-lg p-8 hover-lift">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Data Retention</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                We retain your personal information only for as long as necessary to fulfill the purposes
                                outlined in this Privacy Policy and comply with legal obligations.
                            </p>
                        </section>

                        <!-- International Transfers -->
                        <section class="bg-white rounded-2xl shadow-lg p-8 hover-lift">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-cyan-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-cyan-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">International Transfers</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Your information may be transferred internationally. We ensure appropriate safeguards are in
                                place to protect your information during such transfers.
                            </p>
                        </section>

                        <!-- Children's Privacy -->
                        <section class="bg-white rounded-2xl shadow-lg p-8 hover-lift">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-rose-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Children's Privacy</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Our services are not intended for children under 18 years. We do not knowingly collect
                                personal information from children.
                            </p>
                        </section>
                    </div>

                    <!-- Changes to Policy -->
                    <section
                        class="bg-gradient-to-r from-blue-600 to-red-600 rounded-2xl shadow-xl p-8 lg:p-12 text-white">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold">Policy Updates</h2>
                        </div>
                        <p class="text-blue-100 leading-relaxed text-lg">
                            We may update this Privacy Policy from time to time. We will notify you of any material changes
                            by posting the new Privacy Policy on our website and updating the "Last Updated" date. Your
                            continued use of our services after such changes constitutes acceptance of the updated policy.
                        </p>
                    </section>

                    <!-- Contact Information -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Contact Us</h2>
                        </div>

                        <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                            If you have any questions about this Privacy Policy or our data practices, please contact us:
                        </p>

                        <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-xl p-8 border-l-4 border-red-600">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                        WLD Connect Logistics Limited
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                            <span class="text-gray-700">privacy@wldconnect.com</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>
                                            <span class="text-gray-700">+1 (555) 123-4567</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                                        <svg class="w-5 h-5 text-red-600 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        Business Address
                                    </h4>
                                    <p class="text-gray-700 leading-relaxed">
                                        [Your Business Address]<br>
                                        [City, State, ZIP Code]<br>
                                        [Country]
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6 pt-6 border-t border-gray-200">
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <a href="{{ route('contact') }}"
                                        class="bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors inline-flex items-center justify-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                        </svg>
                                        Contact Us
                                    </a>
                                    <a href="{{ route('terms-of-service') }}"
                                        class="border-2 border-red-600 text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-600 hover:text-white transition-colors inline-flex items-center justify-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        Terms of Service
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
