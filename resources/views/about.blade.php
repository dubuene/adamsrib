    @extends('layouts.base')
    @section('content')

<div class="max-w-4xl mx-auto p-6">

    <div class="mb-6">
        <h1 class="text-3xl font-bold text-heading">Inventory Management</h1> <h2 class="font-bold"> class="mb-2 text-lg font-medium text-heading">Password requirements:</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">

        <div>
            <ul class="space-y-1 text-body list-disc list-inside">
                <li>At least 10 characters (and up to 100 characters)</li>
                <li>At least one lowercase character</li>
                <li>Inclusion of at least one special character, e.g., ! @ # ?</li>
            </ul>
        </div>

        <div>
            <div class="max-w-sm w-full bg-neutral-primary-soft border border-default rounded-base shadow-xs p-4 md:p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h5 class="text-2xl font-semibold text-heading">32.4k</h5>
                        <p class="text-body">Users this week</p>
                    </div>
                    <div class="flex items-center px-2.5 py-0.5 font-medium text-fg-success text-center">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4"/>
                        </svg>
                        12%
                    </div>
                </div>
                <div id="area-chart"></div>
                <div class="grid grid-cols-1 items-center border-light border-t justify-between">
                    <div class="flex justify-between items-center pt-4 md:pt-6">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown" class="text-sm font-medium text-body hover:text-heading inline-flex items-center" type="button">
                            Last 7 days
                            <svg class="w-4 h-4 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/></svg>
                        </button>
                        <div id="lastDaysdropdown" class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44">
                            <ul class="p-2 text-sm text-body font-medium">
                                <li><a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium rounded">Yesterday</a></li>
                                <li><a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium rounded">Today</a></li>
                            </ul>
                        </div>
                        <a href="#" class="text-fg-brand text-sm font-medium px-3 py-2">Users Report</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
     @endsection
