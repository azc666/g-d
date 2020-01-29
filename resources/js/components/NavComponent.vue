<template>
    <header class="bg-teal-400 opacity-75 sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
      <div>
        <img class="h-8" src="/assets/g-d_logo_wht.gif" alt="G+D Logo">
      </div>
      <div class="sm:hidden">
        <button @click="isOpen = !isOpen" type="button" class="block text-gray-200 hover:text-white focus:text-white focus:outline-none">
          <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>
      </div>
    </div>
    <div :class="isOpen ? 'block' : 'hidden'" class="px-2 pt-2 pb-4 sm:flex sm:p-0">
      <ul id="primary" class="sm:flex">
        <li><a href="#" class="block ml-2 mr-4 px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">About Us</a></li>
        <li><a href="#" class="ml-2 mr-4 mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800 sm:mt-0 sm:ml-10">Services</a></li>
        <li><a href="#" class="ml-2 mr-4 mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800 sm:mt-0 sm:ml-10">Sending Files</a></li>
        <li><a href="#" class="mt-1 mr-4 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800 ml-2 sm:mt-0 sm:ml-10">Contact Us</a></li>
      </ul>
    </div>

  </header>
</template>

<script>
    export default {
        data() {
            return {
                isOpen: false,
            }
        },
    }
</script>
