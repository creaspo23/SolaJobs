@csrf
<div class="flex justify-between gap-3">
    <span class="w-1/2">
        <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Company
            Jobs</label>
        <input id="jobTitle" type="text" name="jobTitle" placeholder="software E" autocomplete="given-jobTitle"
            class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
            required />
    </span>
</div>

<label for="jobDescription" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">job Description</label>
<input id="jobDescription" type="text" name="jobDescription" placeholder="write clean code"
    autocomplete="given-jobDescription"
    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
    required />

<label for="gender" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Gender</label>
<input id="gender" type="text" name="gender" placeholder="Male" autocomplete=" given-gender"
    class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
    required />
