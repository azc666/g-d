<template>
  <footer class="absolute w-full bottom-0 bg-teal-400 opacity-75">
    <div class="sm:flex items-center justify-around px-4 py-2 text-sm">
      <div class="text-center flex-1 text-gray-700 text-2xl text-semiboldleading-none">
        <p class="leading-tight">
          Graphics+Design
          <br />
          <span class="italic text-xl line-height-none">"Imaging at the Speed of Business"</span>
        </p>
      </div>
      <hr class="border border-gray-500 mt-2 mb-2 sm:hidden" />
      <div class="text-center flex-1 text-gray-700">
        <!-- <span class="text-xl">Reach Us</span> <br />-->
        <!-- <svg class="h-4 w-4 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path
            d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"
          />
        </svg> -->
        <img class="h-4 w-4 inline-block" src="assets/icons/phone.svg" alt="">
&nbsp; 813-254-9444
        <br />
        <img class="h-4 w-4 inline-block" src="assets/icons/fax.svg" alt="">
&nbsp;813-254-9445
        <br />
        <img class="h-4 w-4 inline-block" src="assets/icons/at.svg" alt="">
&nbsp;output@g-d.com
        <br />
        <img class="h-4 w-4 inline-block" src="assets/icons/browser.svg" alt="">
        &nbsp;www.g-d.com
      </div>
      <hr class="border border-gray-500 mt-2 mb-2 sm:hidden" />
      <div class="text-center flex-1 text-gray-700">
        Graphics+Design
        <br />A Division of AZC Enterprises, Inc.
        <br />1111 West Cass Street
        <br />Tampa, FL 33606
      </div>
    </div>
    <hr class="border border-gray-500" />
    <div class="flex justify-center align-center text-sm text-gray-400 py-2 mb-1">
      Copyright © {{date}}
      <a
        href="https://www.g-d.com"
        class="text-gray-400 hover:text-gray-300 text-sm font-semibold"
      >&nbsp;&nbsp;Graphics+Design</a>
    </div>
  </footer>
</template>
<script>
export default {
  data() {
    return {
      date: new Date().getFullYear()
    };
  }
};
</script>
