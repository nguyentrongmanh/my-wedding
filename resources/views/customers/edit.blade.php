@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Edit Customer</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <!-- Form for updating the customer -->
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" value="{{ old('name', $customer->name) }}" required>
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" value="{{ old('email', $customer->email) }}">
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Phone Field -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone:</label>
                <input type="text" name="phone" id="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" value="{{ old('phone', $customer->phone) }}">
                @error('phone')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Nickname Field -->
            <div class="mb-4">
                <label for="nickname" class="block text-gray-700 text-sm font-bold mb-2">Nickname:</label>
                <input type="text" name="nickname" id="nickname" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" value="{{ old('nickname', $customer->nickname) }}">
                @error('nickname')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address Field -->
            <div class="mb-4">
                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                <input type="text" name="address" id="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" value="{{ old('address', $customer->address) }}">
                @error('address')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Address Field -->
            <div class="mb-4">
                <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Note:</label>
                <textarea name="note" id="note" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" rows="5" cols="30">{{ old('note', $customer->note) }}</textarea>
                @error('note')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Response Field (Dropdown) -->
            <div class="mb-4">
                <label for="friend_of" class="block text-gray-700 text-sm font-bold mb-2">Friend Of:</label>
                <select name="friend_of" id="friend_of" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring">
                    <option value="">Select Response</option>
                    <option value="1" {{ old('friend_of', $customer->friend_of) == 1 ? 'selected' : '' }}>Chú rể</option>
                    <option value="2" {{ old('friend_of', $customer->friend_of) == 2 ? 'selected' : '' }}>Cô dâu</option>
                    <option value="3" {{ old('friend_of', $customer->friend_of) == 3 ? 'selected' : '' }}>Bố mẹ</option>
                </select>
                @error('friend_of')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Response Field -->
            <div class="mb-4">
                <label for="response" class="block text-gray-700 text-sm font-bold mb-2">Response:</label>
                <select name="response" id="response" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring">
                    <option value="">Select Response</option>
                    <option value="0" {{ old('response', $customer->response) == 0 ? 'selected' : '' }}>NOT ANSWER YET</option>
                    <option value="1" {{ old('response', $customer->response) == 1 ? 'selected' : '' }}>JOIN</option>
                    <option value="2" {{ old('response', $customer->response) == 2 ? 'selected' : '' }}>NOT JOIN</option>
                </select>
                @error('response')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring">
                    Update Customer
                </button>
                <a href="{{ route('customers.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
