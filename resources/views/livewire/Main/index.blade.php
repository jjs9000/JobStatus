<div class="min-h-screen p-6 bg-gray-100">
    <h1 class="mb-4 text-2xl font-bold">Job Application Tracker</h1>
    
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">No</th>
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
                @if($jobs->isEmpty())
                    <tr>
                        <td colspan="9" class="px-4 py-2 text-center text-gray-500 border">No job applications found.</td>
                    </tr>
                @else
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
                                <form action="{{ route('job-applications.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job application?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>