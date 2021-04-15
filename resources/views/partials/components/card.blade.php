<article>
  <a href="{{$post->guid}}" class="hover:no-underline grid md:grid-cols-8 xl:grid-cols-9 items-start relative rounded-xl p-3 sm:p-5 xl:p-6 overflow-hidden">
    <h3 class="font-semibold text-gray-900 md:col-start-3 md:col-span-6 xl:col-start-3 xl:col-span-7 mb-1 ml-9 md:ml-0">{{$post->post_title}}</h3>
    <time datetime="{{$post->post_date}}" class="md:col-start-1 md:col-span-2 row-start-1 md:row-end-3 flex items-center font-medium mb-1 md:mb-0">
      <svg viewBox="0 0 12 12" class="w-3 h-3 mr-6 overflow-visible text-gray-300">
        <circle cx="6" cy="6" r="6" fill="currentColor"></circle>
        <path d="M 6 -6 V -30" fill="none" stroke-width="2" stroke="currentColor" class="text-gray-200"></path>
        <path d="M 6 18 V 500" fill="none" stroke-width="2" stroke="currentColor" class="text-gray-200"></path>
      </svg>
      @php
        the_time( 'M j, Y' );
      @endphp
    </time>
    <p class="md:col-start-3 md:col-span-6 xl:col-span-7 ml-9 md:ml-0 text-gray-700">One of the hardest constraints we've had to deal with as we've improved Tailwind CSS over the years is the generated file size in development. With enough customizations to your config file, the generated CSS can reach 10mb or more, and there's only so much CSS that build tools and even the browser itself will comfortably tolerate.</p>
  </a>
</article>
