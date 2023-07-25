<x-app>
    
    <x-b-bar o="Settings" t="System Information"></x-b-bar>
    {{-- <x-form-box  >
    </x-form-box> --}}

    <div class="form-box p-4 bg-yellow-50 mt-3">
        <div class="grid gap-2 sm:grid-cols-2">
            <form class="col-span-1" action="{{ route('option.dateFormat') }}" method="POST">
                @csrf
                {{-- Start Card --}}
                <div
                    class="col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="space-y-6">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">Date Format Settings</h5>
                        <div class="grid gap-1 grid-cols-6">
                            <input type="text" class="form-control col-span-4">
                            <button
                                class="col-span-2 text-white bg-blue-700 
                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm
                 px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none
                 dark:focus:ring-blue-800">Save</button>
                        </div>
                    </div>
                </div>
            </form>

            <form class="col-span-1" action="{{ route('option.smsConfig') }}" method="POST">
                @csrf
                {{-- Start Card --}}
                <div
                    class="col-span-6 p-2  border border-gray-200 rounded-lg shadow sm:p-3 md:p-4 dark:bg-gray-800 dark:border-gray-700">
                    <div class="space-y-6">
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-3">SMS Settings</h5>
                        <div class="grid gap-1 grid-cols-12">
                            <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
                                <label class="col-span-4 flex items-center"> SMS TOKEN </label>
                                <div class="col-span-8 p-1">
                                    <input type="text" class="form-control @error('token') is-invalid @enderror"
                                        name="token" value="{{ config('sms.token') }}">
                                    @error('token')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
                                <label class="col-span-4 flex items-center"> SMS URL </label>
                                <div class="col-span-8 p-1">
                                    <input type="text" class="form-control @error('url') is-invalid @enderror"
                                        name="url" value="{{ config('sms.url') }}">
                                    @error('url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-span-12 grid grid-cols-12 hover:bg-purple-200">
                                <label class="col-span-4 flex items-center"> SMS Information URL </label>
                                <div class="col-span-8 p-1">
                                    <input type="text" class="form-control @error('info_url') is-invalid @enderror"
                                        name="info_url" value="{{ config('sms.info_url') }}">
                                    @error('info_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-span-12 flex justify-end">
                                <button
                                    class="px-4 py-2  my-4 font-semibold text-sm text-gray-900 bg-gradient-to-r from-teal-200
to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 rounded-md shadow-sm outline outline-2 outline-offset-2
 outline-indigo-500 dark:bg-slate-700 dark:text-slate-200 dark:border-transparent flex items-center">
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 1v16M1 9h16" />
                                    </svg>
                                    <span class="ml-1">SUBMIT</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>


</x-app>
