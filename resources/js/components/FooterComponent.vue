<template>
  <footer class="bg-teal-400 opacity-75 absolute right-0 bottom-0 top:0 left-0">
    <div class="sm:flex items-center justify-around sm:px-4 sm:py-2 text-sm">
      <div class="text-center sm:flex-1 text-gray-700 text-xl text-semibold leading-none">
        <p class="pt-2 leading-tight font-myriad font-light">
          Graphics + Design
          <br />
          <span class="text-base line-height-none"><span class="italic"> Imaging at the Speed of Business</span><br>
          Hours of Operation: M-F 8:30am-6pm</span>

        </p>
      </div>

      <hr class="border border-gray-500 mt-2 mb-2 sm:hidden" />

      <div class="text-gray-700">

        <div class="flex-1 text-center sm:text-left sm:items-center">

          <!-- <img class="h-4 w-4 inline-block" src="assets/icons/phone.svg" alt="" />
          &nbsp;813-254-9444 -->

          <img class="inline-block"  style="width:16px; height:16px;" src="assets/icons/phone2.png" alt="" />&nbsp;
          <a href="tel:8132549444" class="hover:text-gray-600">813-254-9444</a>


          <br />

          <img class="h-4 w-4 inline-block" src="assets/icons/fax.svg" alt="" />
          &nbsp;813-254-9445
          <br />

          <img style="width:16px; height:16px;" class="inline-block" src="assets/icons/at2.png" alt="" />&nbsp;
          <a href="mailto:output@g-d.com" class="hover:text-gray-600">output@g-d.com</a>

          <br />

          <img class="h-4 w-4 inline-block" src="assets/icons/browser.svg" alt="" />
          &nbsp;www.g-d.com
        </div>
      </div>

      <hr class="border border-gray-500 mt-2 mb-2 sm:hidden" />

      <div class="text-center flex-1 text-gray-700 pb-2 sm:pb-0">
        Graphics + Design
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
