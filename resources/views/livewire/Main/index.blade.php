<div class="min-h-screen p-6 bg-gray-100">
    <h1 class="mb-4 text-2xl font-bold">Job Application Tracker</h1>

    <div class="overflow-x-auto">
        <table class="w-full border-collapse table-auto">
            <thead>
                <tr class="text-left text-gray-700 bg-gray-200">
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">Company</th>
                    <th class="px-4 py-2 border">Job</th>
                    <th class="px-4 py-2 border">Status</th>
                    <th class="px-4 py-2 border">Location</th>
                    <th class="px-4 py-2 border">Responsibilities</th>
                    <th class="px-4 py-2 border">Allowance (RM)</th>
                    <th class="px-4 py-2 border">Platform</th>
                    <th class="px-4 py-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $index => $job)
                    <tr class="bg-white border-b">
                        <td class="px-4 py-2 border">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border">{{ $job->company }}</td>
                        <td class="px-4 py-2 border">{{ $job->job }}</td>
                        <td class="px-4 py-2 border">
                            <select class="w-full text-gray-900 border border-gray-300 rounded-md bg-gray-50" 
                                wire:model="jobs.{{ $index }}.status">
                                <option value="applied">Applied</option>
                                <option value="contacted">Contacted</option>
                                <option value="interviewed">Interviewed</option>
                                <option value="rejected">Rejected</option>
                                <option value="accepted">Accepted</option>
                                <option value="ghosted">Ghosted</option>
                            </select>
                        </td>
                        <td class="px-4 py-2 border">{{ $job->location }}</td>
                        <td class="px-4 py-2 border">{{ $job->responsibilities }}</td>
                        <td class="px-4 py-2 border">{{ $job->allowance }}</td>
                        <td class="px-4 py-2 border">{{ $job->platform }}</td>
                        <td class="px-4 py-2 border">
                            <button class="px-4 py-1 text-white bg-blue-500 rounded-md hover:bg-blue-600" 
                                wire:click="editJob({{ $job->id }})">
                                Edit
                            </button>
                            <button class="px-4 py-1 text-white bg-red-500 rounded-md hover:bg-red-600" 
                                wire:click="deleteJob({{ $job->id }})">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
