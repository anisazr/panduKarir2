@extends('layouts.app')


@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    About Us
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-500">
                    Discover who we are and what drives us forward
                </p>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900">Our Mission</h2>
                    <p class="mt-4 text-lg text-gray-500">
                        We are committed to providing innovative solutions that empower businesses
                        and individuals to achieve their goals through technology.
                    </p>
                </div>
                <div class="relative h-64 overflow-hidden rounded-lg">
                    <img class="object-cover w-full h-full" src="{{ asset('images/mission.jpg') }}" alt="Our Mission">
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">Our Team</h2>
                <p class="mt-4 text-lg text-gray-500">
                    Meet the people behind our success
                </p>
            </div>
            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Team Member Card -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/team-1.jpg') }}" alt="Team Member">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900">John Doe</h3>
                        <p class="text-gray-600">CEO & Founder</p>
                    </div>
                </div>
                <!-- Add more team member cards as needed -->
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">Get in Touch</h2>
                <p class="mt-4 text-lg text-gray-500">
                    We'd love to hear from you
                </p>
            </div>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="text-center">
                        <div class="flex justify-center">
                            <svg class="h-10 w-10 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="mt-2 text-xl font-medium text-gray-900">Email</h3>
                        <p class="mt-1 text-gray-500">contact@example.com</p>
                    </div>
                    <!-- Add more contact information as needed -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
