@extends('layouts.app')

@section('title', 'Terms of Service - WLD Connect Logistics')
@section('description', 'Read the terms and conditions for using WLD Connect Logistics services and website. Understand
    your rights and responsibilities.')

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
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">
                    Terms of <span class="text-red-400">Service</span>
                </h1>
                <p class="text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    Please read these terms carefully before using our logistics services.
                </p>
            </div>
        </div>
    </section>

    <!-- Terms of Service Content -->
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
                    <!-- Agreement to Terms -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Agreement to Terms</h2>
                        </div>
                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                These Terms of Service ("Terms") constitute a legally binding agreement between you and WLD
                                Connect Logistics Limited ("Company," "we," "us," or "our") regarding your use of our
                                website, services, and logistics solutions.
                            </p>
                            <div class="grid lg:grid-cols-2 gap-6">
                                <div class="bg-blue-50 border-l-4 border-blue-400 p-6 rounded-r-lg">
                                    <h3 class="font-semibold text-blue-900 mb-2">By Using Our Services</h3>
                                    <p class="text-blue-800">
                                        You agree to be bound by these Terms. If you do not agree, please do not use our
                                        services.
                                    </p>
                                </div>
                                <div class="bg-orange-50 border-l-4 border-orange-400 p-6 rounded-r-lg">
                                    <h3 class="font-semibold text-orange-900 mb-2">Terms Updates</h3>
                                    <p class="text-orange-800">
                                        We reserve the right to modify these Terms. Changes are effective immediately upon
                                        posting.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Our Services -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Our Services</h2>
                        </div>

                        <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                            WLD Connect Logistics provides comprehensive logistics and supply chain solutions:
                        </p>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4 text-center">
                                <div
                                    class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <h3 class="text-sm font-semibold text-blue-900">Warehousing</h3>
                            </div>

                            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4 text-center">
                                <div
                                    class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                                    </svg>
                                </div>
                                <h3 class="text-sm font-semibold text-green-900">International Shipping</h3>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4 text-center">
                                <div
                                    class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </div>
                                <h3 class="text-sm font-semibold text-purple-900">Freight Handling</h3>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-4 text-center">
                                <div
                                    class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h3 class="text-sm font-semibold text-orange-900">Supply Chain</h3>
                            </div>
                        </div>

                        <div class="mt-6 bg-gray-50 rounded-lg p-6">
                            <p class="text-gray-600 text-sm italic">
                                Service availability may vary by location and is subject to our operational capacity and
                                regulatory requirements.
                            </p>
                        </div>
                    </section>

                    <!-- User Responsibilities -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">User Responsibilities</h2>
                        </div>

                        <div class="grid lg:grid-cols-2 gap-8">
                            <!-- Account & Information -->
                            <div class="space-y-6">
                                <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6">
                                    <h3 class="text-xl font-semibold text-blue-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Account Registration
                                    </h3>
                                    <p class="text-blue-800">
                                        Maintain confidentiality of your account credentials and take responsibility for all
                                        activities under your account.
                                    </p>
                                </div>

                                <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6">
                                    <h3 class="text-xl font-semibold text-green-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Accurate Information
                                    </h3>
                                    <p class="text-green-800">
                                        Provide accurate, current, and complete information when using our services and
                                        update changes promptly.
                                    </p>
                                </div>
                            </div>

                            <!-- Compliance & Prohibited Items -->
                            <div class="space-y-6">
                                <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl p-6">
                                    <h3 class="text-xl font-semibold text-orange-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        Legal Compliance
                                    </h3>
                                    <p class="text-orange-800">
                                        Comply with all applicable laws, regulations, and industry standards including
                                        customs and shipping regulations.
                                    </p>
                                </div>

                                <div class="bg-gradient-to-r from-red-50 to-red-100 rounded-xl p-6">
                                    <h3 class="text-xl font-semibold text-red-900 mb-4 flex items-center">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636M5.636 18.364L18.364 5.636" />
                                        </svg>
                                        Prohibited Items
                                    </h3>
                                    <p class="text-red-800 mb-3">
                                        Do not ship or store:
                                    </p>
                                    <ul class="text-red-700 text-sm space-y-1">
                                        <li>• Illegal or hazardous materials</li>
                                        <li>• Perishable goods without arrangements</li>
                                        <li>• Counterfeit products</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Payment Terms -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Payment Terms</h2>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-6 text-center">
                                <div
                                    class="w-16 h-16 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-yellow-900 mb-2">Pricing</h3>
                                <p class="text-yellow-700 text-sm">Based on current rate schedule. Prices subject to change
                                    without notice.</p>
                            </div>

                            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center">
                                <div
                                    class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-green-900 mb-2">Payment Methods</h3>
                                <p class="text-green-700 text-sm">Credit cards, bank transfers, and approved business
                                    accounts.</p>
                            </div>

                            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 text-center">
                                <div
                                    class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-red-900 mb-2">Late Payments</h3>
                                <p class="text-red-700 text-sm">May result in additional fees and service suspension.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Liability and Insurance -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Liability and Insurance</h2>
                        </div>

                        <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-xl p-8">
                            <div class="grid lg:grid-cols-3 gap-6">
                                <div class="text-center">
                                    <div
                                        class="w-12 h-12 bg-indigo-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-indigo-900 mb-2">Limited Liability</h3>
                                    <p class="text-indigo-700 text-sm">Liability limited to actual value or published
                                        limits</p>
                                </div>

                                <div class="text-center">
                                    <div
                                        class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-purple-900 mb-2">Claims Process</h3>
                                    <p class="text-purple-700 text-sm">Proper documentation required within timeframes</p>
                                </div>

                                <div class="text-center">
                                    <div
                                        class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <h3 class="font-semibold text-pink-900 mb-2">Force Majeure</h3>
                                    <p class="text-pink-700 text-sm">Not liable for circumstances beyond control</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Service Standards -->
                    <section class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 hover-lift">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-cyan-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900">Service Standards</h2>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-gradient-to-br from-cyan-50 to-cyan-100 rounded-xl p-6">
                                <h3 class="text-lg font-semibold text-cyan-900 mb-3 flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Delivery Timeframes
                                </h3>
                                <p class="text-cyan-700 text-sm">
                                    Delivery times are estimates unless specifically guaranteed in writing. Actual times may
                                    vary.
                                </p>
                            </div>

                            <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-xl p-6">
                                <h3 class="text-lg font-semibold text-teal-900 mb-3 flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Service Modifications
                                </h3>
                                <p class="text-teal-700 text-sm">
                                    We reserve the right to modify or discontinue services with reasonable notice as needed.
                                </p>
                            </div>

                            <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-xl p-6">
                                <h3 class="text-lg font-semibold text-emerald-900 mb-3 flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    Quality Standards
                                </h3>
                                <p class="text-emerald-700 text-sm">
                                    We maintain high service quality and make reasonable efforts to resolve issues promptly.
                                </p>
                            </div>
                        </div>
                    </section>

                    <!-- Additional Important Terms -->
                    <div class="grid lg:grid-cols-2 gap-8">
                        <!-- Privacy and Data -->
                        <section class="bg-white rounded-2xl shadow-lg p-8 hover-lift">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Privacy & Data Protection</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Your privacy is important to us. Our collection and use of your personal information is
                                governed by our Privacy Policy.
                            </p>
                            <a href="{{ route('privacy-policy') }}"
                                class="text-red-600 font-semibold hover:text-red-700 transition-colors inline-flex items-center">
                                View Privacy Policy
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </section>

                        <!-- Intellectual Property -->
                        <section class="bg-white rounded-2xl shadow-lg p-8 hover-lift">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Intellectual Property</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                All website content, graphics, logos, and software are protected by copyright and
                                intellectual property laws. No reproduction without permission.
                            </p>
                        </section>

                        <!-- Dispute Resolution -->
                        <section class="bg-white rounded-2xl shadow-lg p-8 hover-lift">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-rose-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-rose-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16l-3-3m3 3l3-3" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Dispute Resolution</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                We encourage direct communication to resolve disputes. Claims must be brought within one
                                year.
                            </p>
                            <div class="bg-rose-50 rounded-lg p-4">
                                <p class="text-rose-800 text-sm font-medium">
                                    Governing Law: [Your Jurisdiction]
                                </p>
                            </div>
                        </section>

                        <!-- Termination -->
                        <section class="bg-white rounded-2xl shadow-lg p-8 hover-lift">
                            <div class="flex items-center mb-6">
                                <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636M5.636 18.364L18.364 5.636" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Termination</h3>
                            </div>
                            <p class="text-gray-700 leading-relaxed">
                                Either party may terminate services with appropriate notice. Outstanding fees and
                                obligations remain after termination.
                            </p>
                        </section>
                    </div>

                    <!-- Miscellaneous -->
                    <section
                        class="bg-gradient-to-r from-blue-600 to-red-600 rounded-2xl shadow-xl p-8 lg:p-12 text-white">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold">Legal Framework</h2>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <h3 class="text-xl font-semibold mb-2">Entire Agreement</h3>
                                <p class="text-blue-100">These Terms, Privacy Policy, and service agreements constitute the
                                    complete agreement.</p>
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-semibold mb-2">Severability</h3>
                                <p class="text-blue-100">If any provision is unenforceable, remaining provisions continue
                                    in effect.</p>
                            </div>
                            <div class="text-center">
                                <h3 class="text-xl font-semibold mb-2">Waiver</h3>
                                <p class="text-blue-100">No waiver of any provision constitutes a continuing or additional
                                    waiver.</p>
                            </div>
                        </div>
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
                            <h2 class="text-3xl font-bold text-gray-900">Contact Information</h2>
                        </div>

                        <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                            If you have any questions about these Terms of Service, please contact us:
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
                                            <span class="text-gray-700">legal@wldconnect.com</span>
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
                                    <a href="{{ route('privacy-policy') }}"
                                        class="border-2 border-red-600 text-red-600 px-6 py-3 rounded-lg font-semibold hover:bg-red-600 hover:text-white transition-colors inline-flex items-center justify-center">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        Privacy Policy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Acknowledgment -->
                    <section
                        class="bg-gradient-to-r from-green-600 to-blue-600 rounded-2xl shadow-xl p-8 lg:p-12 text-white text-center">
                        <div class="flex justify-center mb-6">
                            <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <h2 class="text-3xl font-bold mb-6">Acknowledgment</h2>
                        <p class="text-green-100 leading-relaxed text-lg max-w-3xl mx-auto">
                            By using our services, you acknowledge that you have read, understood, and agree to be bound by
                            these Terms of Service. These Terms are effective as of the date listed above and will remain in
                            effect until modified or terminated.
                        </p>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
