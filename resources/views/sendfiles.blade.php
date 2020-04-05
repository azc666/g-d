@extends('layout')

@section('title')
Services
@endsection

@section('content')

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="flex p-8 pb-0 sm:pb-2 md:-mb-6 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-lg">

  <div class="flex container m-0">

    <div class="w-1 sm:w-1/4">
      <img class="w-0 sm:w-full mr-12" src="/assets/posters/services.jpg" alt="">
    </div>

    <div class="w-full sm:w-3/4">
      <h1 class="text-4xl text-gray-800 sm:pl-12 mb-4 text-center sm:text-left font-chicle">
        Sending Files
      </h1>

      <h3 class="text-2xl text-gray-800 sm:ml-12 text-left font-chicle">
        E-Mail
      </h3>
      <p class="text-base md:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-8 sm:mr-6 font-myriad">
        <span class="block mb-2"> If the total archived size of your files is 10MB or under, we recommend sending via email to:</span>
        <span
          class="tsm:text-xl text-semibold bg-purple-200 border-purple-800 border-2 rounded-lg p-1 pl-2 pr-2 text-purple-700 hover:bg-purple-500 hover:text-purple-200">
          <a href="mailto:output@g-d.com">output@g-d.com</a></span>
        <span class="block mt-2">Please be sure to include your contact information, as well as complete specs for your submitted file. We will contact you with any questions we may have. <span class="font-semibold italic"> We will never begin production without your authorization.</span></span>
      </p>

      <h3 class="text-2xl text-gray-800 sm:ml-12 text-left font-chicle">
        Web Browser
      </h3>
      <p class="text-base md:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-8 sm:mr-6 font-myriad">
        <span class="block mb-2">Larger projects (or any project, if you prefer) can easily be sent via your web browser to our secure FTP site:</span>
        <span
          class="sm:text-xl text-semibold bg-purple-200 border-purple-800 border-2 rounded-lg p-1 pl-2 pr-2 text-purple-700 hover:bg-purple-500 hover:text-purple-200">
          <a href="https://files2.g-d.com" target="_blank">https://files2.g-d.com</a>
        </span>
        <span class="block mt-2">Use your assigned User Name and Password to log in. If you do not have a user name or password set up, please call us and we can set up one for you. Please be sure to include your contact information (email address, phone number, etc...), as well as complete specs for the job when you upload the project or in a seperate email to <a href="mailto:output@g-d.com" class="font-semibold hover:text-gray-600">output@g-d.com.</a><span class="font-semibold italic"> We will never begin production without your authorization.</span></span>
      </p>

      <h3 class="text-2xl text-gray-800 sm:ml-12 text-left font-chicle">
        Acceptable File Formats
      </h3>
      <p class="text-base md:text-xl text-gray-700 sm:ml-12 mb-6 sm:mr-6 font-myriad">
        Press Quality PDF files are preferred for ALL printing.  We also accept a wide variety of file formats including but not limited to: Creative Cloud applications (InDesign, Photoshop & Illustrator). When providing live files, please be sure to package your project with all supporting documents including images and fonts. Microsoft Excel or CSV files are preferred for mailing lists and variable data printing.
      </p>

      <p class="text-base md:text-xl text-gray-700 sm:ml-12 mb-6 sm:mb-8 sm:mr-6 font-myriad">If you need help in preparing your files for production, please give us a call at <span><a href="tel:8132549444" class="font-semibold hover:text-gray-600">813-254-9444.</a></span> Our knowledgable staff will be happy to assist you!
      </p>


    </div>

  </div>

</div>

<div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

  @endsection
