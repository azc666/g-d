@extends('layout')

@section('title')
Testimonials
@endsection

@section('content')

<div id="mainnav">
  <nav-component></nav-component>
</div>

<div class="flex xxs:p-10 sm:p-8 xxs:mb-16 sm:pb-20 md:mb-6 sm:mt-12 mx-auto container background-trans border rounded-lg shadow-lg">

  <div class="flex container m-0">

    {{-- <div class="w-1 sm:w-1/4">
      <img class="w-0 sm:w-50 mr-12" src="/assets/posters/homeimg.jpg" alt="">
    </div> --}}

    <div class="w-full">
      <h1 class="text-4xl sm:text-5xl xl:text-6xl text-gray-800 sm:mb-2 sm:mx-auto text-center font-chicle">
        Testimonial Bulletin Board
      </h1>

      <div class="flex flex-wrap justify-between items-start">

        <div class="self-start max-w-md py-4 px-8 mt-12 bg-gray-200 shadow-2xl rounded-lg my-20 sm:mx-auto 2xl:mr-64">
          <div>
            <img class="xxs:mx-auto sm:ml-32 -mt-8 w-30 h-30 object-cover" src="assets/BLUE_PUSHPIN.png" alt="">
            <img class="-ml-8 -mt-6 w-20 h-20 object-cover" src="assets/quotation-marks.png"
              alt="">
            <p class="mt-2 text-gray-600 font-myriad text-base">The high-quality print and design services provided by
              Graphics + Design have made them a true partner to UT. They manage both our challenging design projects
              and our quick turnaround print jobs with the same level of expertise and customer care. I would highly
              recommend them!</p>
          </div>
          <div class="flex justify-end mt-4">
            <div class="text-base italic font-medium text-indigo-500">– Erin Dixon, Art Director, The University
              of Tampa</div>
          </div>
        </div>

        <div class="self-start max-w-md py-4 px-8 mt-6 bg-gray-200 shadow-2xl rounded-lg xxs:mb-20 sm:my-4 sm:mx-auto">
          <div>
            <img class="xxs:mx-auto sm:ml-32 -mt-8 w-30 h-30 object-cover" src="assets/RED_PUSHPIN.png" alt="">
            <img class="-ml-8 -mt-6 w-20 h-20 object-cover" src="assets/quotation-marks.png"
              alt="">
            <p class="mt-2 text-gray-600 font-myriad text-base">Abe Brown Ministries has worked with Graphics + Design
              on a variety of projects and are always so happy with the
              printing results. They have taken our commercial printing to another level and have volunteered their
              services to help
              us as well. We would highly recommend Graphics + Design to any individual or company looking for graphic
              and design
              assistance at a fair price. Dani and the G + D team are friendly, professional, approachable,
              accommodating, and kind.
              Their response time and attention to detail is outstanding. You can always expect honesty, creativity,
              quality results
              and quick turnaround from Graphics + Design.
            </p>
          </div>
          <div class="flex justify-end mt-4">
            <div class="text-base italic font-medium text-indigo-500">– Robert Blount, President, Abe Brown Ministries
            </div>
          </div>
        </div>

        <div class="self-start max-w-md py-4 lg:-mt-20 px-8 bg-gray-200 shadow-2xl rounded-lg xxs:mb-20 sm:mx-auto">
          <div>
            <img class="xxs:mx-auto sm:ml-32 -mt-8 w-30 h-30 object-cover" src="assets/RED_PUSHPIN.png" alt="">
            <img class="-ml-8 -mt-6 w-20 h-20 object-cover" src="assets/quotation-marks.png"
              alt="">
            <p class="mt-2 text-gray-600 font-myriad text-base">G+D’s dedication to customer service is evident in all
              projects they produce for our firm. We greatly appreciate their
              attention to detail and creative approach in the implementation of our ideas. G+D always meets our
              deadlines and goes
              above and beyond on project requests. My team has developed a great working relationship with the G+D team
              and it is a
              pleasure to work with them.
            </p>
          </div>
          <div class="flex justify-end mt-4">
            <div class="text-base italic font-medium text-indigo-500">– S.T., Creative Services Manager, Holland &
              Knight</div>
          </div>
        </div>

        <div class="self-start max-w-md py-4 px-8 mt-2 bg-gray-200 shadow-2xl rounded-lg xxs:mb-16 sm:my-2 sm:mx-auto">
          <div>
            <img class="xxs:mx-auto sm:ml-32 -mt-8 w-30 h-30 object-cover" src="assets/YELLOW_PUSHPIN.png" alt="">
            <img class="-ml-8 -mt-6 w-20 h-20 object-cover" src="assets/quotation-marks.png"
              alt="">
            <p class="mt-2 text-gray-600 font-myriad text-base">Much thanks to you and your staff for your constant
              professionalism and dedication to your clients. We appreciate you
              more than you know.</p>
          </div>
          <div class="flex justify-end mt-4">
            <div class="text-base italic font-medium text-indigo-500">– Nelli Kieffer, Office Manager, Ye Mystic Krewe
              of Gasparilla</div>
          </div>
        </div>

      </div>

      <p class="font-semibold text-center text-2xl sm:text-4xl text-gray-700 text-semibold sm:ml-12 xxs:mb-4 sm:mb-4 md:mb-0 sm:mr-6 font-myriad">
        Graphics + Design<br><span class="italic text-xl sm:text-2xl">Imaging at the Speed of Business</span> </p>

    </div>

  </div>

</div>

{{-- <div class="container pb-40 sm:pb-12 mx-auto flex flex-wrap"> --}}

  @endsection
