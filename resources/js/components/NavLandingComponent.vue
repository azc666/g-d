<template>
    <header class="bg-teal-400 opacity-75 sm:bg-transparent md:flex md:justify-between sm:items-center sm:px-6 sm:py-2">

    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
      <!-- <div >
        <a href="/" class="h-6 sm:h-8 text-gray-100 text-xl text-semibold hover:text-gray-700">Graphics+Design</a>
      </div> -->

      <div class="sm:hidden">
        <button @click="isOpen = !isOpen" type="button" class="block text-gray-200 hover:text-white focus:text-white focus:outline-none">
          <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>
      </div>

    </div>
<nav id="nav">
    <div :class="isOpen ? 'block' : 'hidden'" class="px-2 pt-2 pb-4 md:flex md:p-0">


<div class="sm:hidden">
      <ul id="primary" class="sm:flex text-xs">
        <li><a href="/aboutus" class="block ml-2 mr-4 px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">About Us</a></li>
        <li><a href="/services" class="ml-2 mr-4 mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800 md:mt-0 md:ml-4">Services</a></li>
        <li><a href="/sendfiles" class="ml-2 mr-4 mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800 md:mt-0 md:ml-4">Sending Files</a></li>
        <li><a href="/contactus" class="mt-1 mr-4 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800 ml-2 md:mt-0 md:ml-4">Contact Us</a></li>
      </ul>
</div>

    </div>
</nav>
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

