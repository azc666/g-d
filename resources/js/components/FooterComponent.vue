<template>
  <footer class="absolute w-full bottom-0 bg-teal-400 opacity-75">
    <div class="flex items-center justify-around px-4 py-2 text-sm">
      <div class="text-center flex-1 text-gray-700 text-2xl text-semibold">
        Graphics+Design
        <br /> <span class="italic text-xl">"Imaging at the Speed of Business"</span>
        </div>
      <div class="text-center flex-1 text-gray-700">
        reach us
        <br />p: 813-254-9444
        <br />f: 813-254-9445
        <br />e: output@g-d.com
        <br />w: www.g-d.com
      </div>
      <div class="text-center flex-1 text-gray-700">
        Graphics+Design
        <br />A Division of AZC Enterprises, Inc.
        <br />1111 West Cass Street
        <br />Tampa, FL 33606
      </div>
    </div>
    <hr class="border border-gray-500" />
    <div class="flex justify-center align-center text-sm text-gray-300 py-2 mb-1">
      Copyright © {{date}}
      <a
        href="https://www.g-d.com"
        class="text-gray-300 hover:text-gray-400 text-sm font-semibold"
      >&nbsp;&nbsp;Graphics+Design</a>
    </div>

    <!-- <div class="container mx-auto px-4 mt-6">
      <hr class="mb-6 border-b-1 border-gray-700" />
      <div
        class="flex items-center md:justify-between justify-center"
      >
        <div class="flex w-full md:w-4/12 px-4">
          <div class="items-center text-sm text-white font-semibold py-1">
            Copyright © {{date}} <br>
            <a
              href="https://www.g-d.com"
              class="text-white hover:text-gray-400 text-sm font-semibold py-1"
              >&nbsp;Graphics+Design</a>
          </div>
        </div>
        <div class="flex-inline w-full md:w-8/12 px-4">
        <div class="flex">
          <div class="text-white items-center">Graphics+Design<br>1111 W. Cass Street<br>Tampa, FL 33606</div>
        </div>
          <ul
            class="flex flex-wrap list-none md:justify-end  justify-center"
          >
            <li>
              <a
                href="https://www.creative-tim.com"
                class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                >Creative Tim</a
              >
            </li>
            <li>
              <a
                href="https://www.creative-tim.com/presentation"
                class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                >About Us</a
              >
            </li>
            <li>
              <a
                href="http://blog.creative-tim.com"
                class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                >Blog</a
              >
            </li>
            <li>
              <a
                href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                >MIT License</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>-->
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
