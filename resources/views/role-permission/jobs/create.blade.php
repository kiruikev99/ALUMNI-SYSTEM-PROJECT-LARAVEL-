<x-app-web-layout>
    <div class="w-full">
    <div class="flex justify-center text-center pt-10 gap-20">
        <div class="flex-none">
            <h1 class="text-2xl font-bold">Job Information Details</h1>
        </div>
        <div class="flex-initial w-60">
            <h1>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    <a href="/roles">Back</a>
                </button>
            </h1>
        </div>
    </div>

    <div class="form mt-10  mx-auto bg-white p-8 shadow-lg rounded-lg">
        <form action="{{ url('jobs') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="job_title" class="block text-sm font-medium text-gray-700">Job Title</label>
                    <input id="job_title" name="job_title" type="text" required
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                           placeholder="Enter job title">
                </div>
                <div>
                    <label for="job_name" class="block text-sm font-medium text-gray-700">Job Name</label>
                    <input id="job_name" name="job_name" type="text" required
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                           placeholder="Enter job name">
                </div>
                <div>
                    <label for="job_type" class="block text-sm font-medium text-gray-700">Job Category Type</label>
                    <select id="job_type" name="job_type" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="">Select job category type</option>
                        <option value="Software Developer">Software Developer</option>
                        <option value="Web Developer">Web Developer</option>
                        <option value="Network Engineer">Network Engineer</option>
                        <option value="Administrator">Administrator</option>
                    </select>
                </div>
                <div>
                    <label for="job_type" class="block text-sm font-medium text-gray-700">Job Duration</label>
                    <select id="job_type" name="job_duration" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option value="">Select job type</option>
                        <option value="Full-time">Full-time</option>
                        <option value="Part-time">Part-time</option>
                        <option value="Contract">Contract</option>
                        <option value="Freelance">Freelance</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>
                <div class="col-span-2">
                    <label for="job_description" class="block text-sm font-medium text-gray-700">Job Description</label>
                    <textarea id="job_description" name="job_description" rows="3" required
                              class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                              placeholder="Enter job description"></textarea>
                </div>
                <div class="col-span-2">
                    <label for="job_qualification" class="block text-sm font-medium text-gray-700">Job Qualification</label>
                    <textarea id="job_qualification" name="job_qualification" rows="2" required
                              class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                              placeholder="Enter job qualification"></textarea>
                </div>
                <div>
                    <label for="job_location" class="block text-sm font-medium text-gray-700">Job Location</label>
                    <input id="job_location" name="job_location" type="text" required
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                           placeholder="Enter job location">
                </div>
                <div>
                    <label for="job_amount" class="block text-sm font-medium text-gray-700">Job Amount</label>
                    <input id="job_amount" name="job_amount" type="number" step="0.01" required
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                           placeholder="Enter job amount">
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Save Job
                </button>
            </div>
        </form>
    </div>
</x-app-web-layout>
