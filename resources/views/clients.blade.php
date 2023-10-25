<x-app-layout>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">What Clients Said</h1>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('assets\image\jayson.jpg') }}">
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Jayzon Umangay</h2>
        <p class="text-base leading-relaxed mt-2">I was highly impressed with the quality of service provided. The team was responsive, professional, and went above and beyond to meet our needs. I couldn't be happier with the outcome."</p>
        <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('assets/image/pilotin.jpg') }}">
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Jeoglad Pilotin</h2>
        <p class="text-base leading-relaxed mt-2">The turnaround time for their support team is outstanding. They resolved my issue within a matter of hours, and the level of assistance I received was exceptional.</p>
        <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('assets/image/prado.jpg') }}">
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Don Francis Prado</h2>
        <p class="text-base leading-relaxed mt-2">I had a minor issue with the installation process, but their support team guided me through it patiently. Once I got past that hurdle, everything worked flawlessly.</p>
        <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
</x-app-layout>
