@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Customers</h1>

    <!-- Form tìm kiếm khách hàng theo tên -->
    <form action="{{ route('customers.index') }}" method="GET" class="mb-4">
        <div class="flex items-center">
            <input type="text" name="search" placeholder="Search by name" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring" value="{{ request()->query('search') }}">
            <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Search
            </button>
        </div>
    </form>

    <!-- Add New Customer Button và Import Button -->
    <div class="flex justify-end gap-x-1 mb-4">
        <a href="{{ route('customers.create') }}" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
            Add New Customer
        </a>
        <a href="{{ route('customers.import') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Import Customers
        </a>
    </div>

    <!-- Table for displaying customers -->
    <div class="overflow-x-auto shadow-md rounded-lg">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-6 text-left text-sm font-medium text-gray-700">Name</th>
                    <th class="py-2 px-6 text-left text-sm font-medium text-gray-700">Nickname</th>
                    <th class="py-2 px-6 text-left text-sm font-medium text-gray-700">Invitation Link</th>
                    <th class="py-2 px-6 text-left text-sm font-medium text-gray-700">Response</th>
                    <th class="py-2 px-6 text-center text-sm font-medium text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr class="border-t">
                    <td class="py-3 px-6 text-gray-800">{{ $customer->name }}</td>
                    <td class="py-3 px-6 text-gray-800">{{ $customer->nickname }}</td>
                    <td class="py-3 px-6 text-gray-800"><a href="{{ $customer->invitation_url }}" target="_blank" >{{ $customer->invitation_url }}</a></td>
                    <td class="py-3 px-6 text-gray-800">{{ $customer->response }}</td>
                    <td class="py-3 px-6 text-center">
                        <a href="{{ route('customers.edit', $customer->id) }}" class="text-yellow-500 hover:text-yellow-700">Edit</a>
                        |
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
