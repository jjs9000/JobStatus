<div
    x-data="{ open: @entangle('isOpen') }"
    x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 items-center justify-center overflow-y-auto"
    aria-labelledby="modal-title" role="dialog" aria-modal="true"
>
    <div class="flex items-end justify-center min-h-screen p-4 text-center sm:block sm:p-0">
        <!-- Modal overlay -->
        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>

        <!-- Modal content -->
        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <form action="{{ route('job-applications.store') }}" method="POST">
                @csrf
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                Add New Job
                            </h3>
                            <div class="mt-4">
                                <!-- Add New Job Form -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Company</label>
                                        <input wire:model="company" type="text" name="company" class="w-full p-2 mt-1 border rounded" placeholder="Company" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Job</label>
                                        <input wire:model="job" type="text" name="job" class="w-full p-2 mt-1 border rounded" placeholder="Job" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Status</label>
                                        <select wire:model="status" name="status" class="w-full p-2 mt-1 border rounded" required>
                                            <option value="applied">Applied</option>
                                            <option value="contacted">Contacted</option>
                                            <option value="interviewed">Interviewed</option>
                                            <option value="rejected">Rejected</option>
                                            <option value="accepted">Accepted</option>
                                            <option value="ghosted">Ghosted</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Location</label>
                                        <input wire:model="location" type="text" name="location" class="w-full p-2 mt-1 border rounded" placeholder="Location" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Responsibilities</label>
                                        <textarea wire:model="responsibilities" name="responsibilities" class="w-full p-2 mt-1 border rounded" placeholder="Responsibilities"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Allowance (RM)</label>
                                        <input wire:model="allowance" type="number" name="allowance" class="w-full p-2 mt-1 border rounded" placeholder="Allowance">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">Platform</label>
                                        <input wire:model="platform" type="text" name="platform" class="w-full p-2 mt-1 border rounded" placeholder="Platform (e.g., LinkedIn, Jobstreet)" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="w-full px-4 py-2 mt-3 font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Save
                    </button>
                    <button type="button" wire:click="closeModal" class="w-full px-4 py-2 mt-3 font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>