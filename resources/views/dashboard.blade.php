@extends('master')
@section('title', 'Menu')

@section('index')
    <x-app-layout>

    </x-app-layout>
    <div class="hidden sm:flex sm:items-center sm:ms-6">
        <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
            <div @click="open = ! open">
                <button
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                    <div>JORGE</div>

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </button>
            </div>

            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute z-50 mt-2 w-48 rounded-md shadow-lg ltr:origin-top-right rtl:origin-top-left end-0"
                @click="open = false" style="display: none;">
                <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white dark:bg-gray-700">
                    <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out"
                        href="http://localhost/TB/public/profile">Profile</a>

                    <!-- Authentication -->
                    <form method="POST" action="http://localhost/TB/public/logout">
                        <input type="hidden" name="_token" value="1GrqFCGEiMhisMXC5xhOqFFH0bEJfrn3sM9gH11c"
                            autocomplete="off">
                        <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out"
                            href="http://localhost/TB/public/logout"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">Log
                            Out</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
