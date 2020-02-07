@extends('layout')

@section('title')
Services
@endsection

@section('content')

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="flex p-8 pb-0 sm:pb-2 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-lg">

  <div class="flex container m-0">

    <div class="w-1 sm:w-1/4">
      <img class="w-0 sm:w-full mr-12" src="/assets/posters/services.jpg" alt="">
    </div>

    <div class="w-full sm:w-3/4">
      <h1 class="text-4xl sm:text-5xl text-gray-800 sm:pl-12 text-center sm:text-left font-chicle">
        Our Services
      </h1>
      <h3 class="text-2xl sm:text-3xl text-gray-800 sm:ml-12 text-left font-chicle">
        E-Mail
      </h3>
      <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-4 sm:mr-6 font-myriad">
        If the total archived size of your files are 5MB or under, we recommend sending via E-Mail to:<br>
        <span class="text-xl sm:text-2xl text-orange-700 hover:text-orange-900"><a href="mailto:output@g-d.com">output@g-d.com</a></span><br>
        Please be sure to include your contact information, as well as complete specs for the job in your E-Mail. We will contact you with any questions we may have. We will never begin production without your authorization.
      </p>
      <h3 class="text-2xl sm:text-3xl text-gray-800 sm:ml-12 text-left font-chicle">
        Web Browser
      </h3>
      <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-4 sm:mr-6 font-myriad">
        Larger archives can easily be sent via your web browser:<br>
        <span class="text-xl sm:text-2xl text-orange-700 hover:text-orange-900"><a
            href="https://files2.g-d.com">https://files2.g-d.com</a></span><br>
        Use your assigned User Name and Password to log in. If you do not have a user name or password set up, please
        call us &
        we can set up one for you. Otherwise, you may use the Anonymous log in option. Please be sure to include your
        contact
        information (email address, phone number, etc...), as well as complete specs for the job when you upload the
        file.
      </p>
      <h3 class="text-2xl sm:text-3xl text-gray-800 sm:ml-12 text-left font-chicle">
        Acceptable File Formats
      </h3>
      <p class="text-base sm:text-xl text-gray-700 sm:ml-12 mb-2 sm:mb-4 sm:mr-6 font-myriad">
        Although Press Quality PDF files are preferred, we accept a wide variety of file formats including but not
        limited to:
        Creative Cloud (InDesign, Photoshop & Illustrator)
        Microsoft Office (Word, Excel, PowerPoint.)
        If you need help in formating your files for prduction, please give us a call at (813) 254-9444. Our
        knowledgable staff
        will be happy to assist you!
      </p>


    </div>

  </div>

</div>

<div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap">

  @endsection
