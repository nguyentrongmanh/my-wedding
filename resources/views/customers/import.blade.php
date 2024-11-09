@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Import Customers</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <!-- Form for uploading the Excel file -->
        <form action="{{ route('customers.import.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="file" class="block text-gray-700 text-sm font-bold mb-2">Upload Excel File:</label>
                <input type="file" name="file" id="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Import Customers
                </button>
                <a href="{{ route('customers.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
