@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Add New Customer</h1>

    <!-- Form for creating a new customer -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf

            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" placeholder="Enter customer name" value="{{ old('name') }}">
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" placeholder="Enter customer email" value="{{ old('email') }}">
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Phone Field -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                <input type="text" name="phone" id="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" placeholder="Enter customer phone number" value="{{ old('phone') }}">
                @error('phone')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Nickname Field -->
            <div class="mb-4">
                <label for="nickname" class="block text-gray-700 text-sm font-bold mb-2">Nickname:</label>
                <input type="text" name="nickname" id="nickname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" placeholder="Enter customer nickname" value="{{ old('nickname') }}">
                @error('nickname')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address Field -->
            <div class="mb-4">
                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                <input type="text" name="address" id="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" placeholder="Enter customer address" value="{{ old('address') }}">
                @error('address')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Response Field (Dropdown) -->
            <div class="mb-4">
                <label for="response" class="block text-gray-700 text-sm font-bold mb-2">Response:</label>
                <select name="response" id="response" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring">
                    <option value="">Select Response</option>
                    <option value="NOT ANSWER YET" {{ old('response') == 'NOT ANSWER YET' ? 'selected' : '' }}>NOT ANSWER YET</option>
                    <option value="JOIN" {{ old('response') == 'JOIN' ? 'selected' : '' }}>JOIN</option>
                    <option value="NOT JOIN" {{ old('response') == 'NOT JOIN' ? 'selected' : '' }}>NOT JOIN</option>
                </select>
                @error('response')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring">
                    Add Customer
                </button>
                <a href="{{ route('customers.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection