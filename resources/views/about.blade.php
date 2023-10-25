<x-app-layout>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">
      <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('assets\image\JADE.png') }}">      </div>
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
          <img class="object-cover w-16 h-16 rounded-full" src="{{ asset('assets\image\avatar.jpg') }}">  
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Jared Aeron Ellasos</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">
            Jordan Anderson, a 27-year-old Silicon Valley CEO, combines his tech innovation prowess at JADE Inc. with a deep commitment to Ninjutsu, infusing discipline and adaptability into his leadership style and community involvement.</p>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
        JADE Innovations Inc. is a forward-thinking tech company specializing in AI, VR, and cybersecurity solutions, driven by a mission to push the boundaries of technology for the betterment of industries and individuals alike. With a diverse and innovative team, we're dedicated to creating cutting-edge products that redefine the way we interact with technology. Our commitment extends beyond innovation, as we actively engage with the community by sponsoring coding camps for local youth to inspire the next generation of tech leaders.          <a class="text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</x-app-layout>