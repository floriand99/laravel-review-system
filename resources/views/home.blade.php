<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title></title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> 
        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">
            body{
                font-family: Poppins;
            }
        </style>
        @livewireStyles
    </head>
<body>

    <x-navbar />
   <!--  <div class="py-20" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)"
>
  <div class="container mx-auto px-6">
    <h2 class="text-4xl font-semibold mb-2 text-white">
      Smart Health Monitoring Wristwatch!
    </h2>
    <h3 class="text-2xl mb-8 text-gray-200">
      Monitor your health vitals smartly anywhere you go.
    </h3>

    <button class="bg-white font-semibold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
      Pre Order
    </button>
  </div>
</div>
    <section class="bg-gray-100">
  <div class="container mx-auto px-6 py-20">
    <h2 class="text-4xl font-semibold text-center text-gray-800 mb-8">
      Testimonials
    </h2>
    <div class="flex flex-wrap">
      <div class="w-full md:w-1/3 px-2 mb-4">
        <div class="bg-white rounded shadow py-2">
          <p class="text-gray-800 text-base px-6 mb-5">Monitoring and tracking my health vitals anywhere I go and on any platform I use has never been easier.</p>
          <p class="text-gray-500 text-xs md:text-sm px-6">John Doe</p>
        </div>
      </div>
      <div class="w-full md:w-1/3 px-2 mb-4">
        <div class="bg-white rounded shadow py-2">
          <p class="text-gray-800 text-base px-6 mb-5">As an Athlete, this is the perfect product for me. I wear my Smart Health Monitoring Wristwatch everywhere I go, even in the bathroom since it's waterproof.</p>
          <p class="text-gray-500 text-xs md:text-sm px-6">Jane Doe</p>
        </div>
      </div>
      <div class="w-full md:w-1/3 px-2 mb-4">
        <div class="bg-white rounded shadow py-2">
          <p class="text-gray-800 text-base px-6 mb-5">I don't regret buying this wearble gadget. One of the best gadgets I own!.</p>
          <p class="text-gray-500 text-xs md:text-sm px-6">James Doe</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- <section class="bg-gray-200 container">
    <div class="py-20">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/3 px-2">
            <div class="shadow bg-white rounded p-3">
                <div class="flex flex-wrap">
                <img class="h-32 w-32" src="https://static.wikia.nocookie.net/marvel_dc/images/a/a6/Batman_Vol_2_2_Variant_Textless.jpg/revision/latest/top-crop/width/360/height/450?cb=20120228075313">
                <div class="flex-1 pl-3">
                <p class="text-gray-700 mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.
                </p>
                <h4 class="font-semibold text-gray-500 mb-2">
                    - Bruce Wayne
                </h4>
                <button class="bg-purple-600 hover:bg-green-500 hover:shadow-lg transition duration-300 transform hover:scale-110 text-white px-4 py-2 rounded shadow-md font-semibold">Read more</button>
                </div>
            </div>
            </div>
        </div>
        <div class="w-full lg:w-1/3 px-2">
            <div class="shadow bg-white rounded p-8">
                <p class="text-gray-700 mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud.
                </p>
                <span class="font-semibold text-indigo-600">
                    Bruce Wayne
                </span>
            </div>
        </div>
        <div class="w-full lg:w-1/3 px-2">
            <div class="shadow bg-white rounded p-8">
                <p class="text-gray-700 mb-2 hover:bg-black transition duration-300">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud.
                </p>
                <span class="font-semibold text-indigo-600">
                    Bruce Wayne
                </span>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-3 md:grid-cols-3">
        <div class="bg-white p-4 md:p-3 shadow">
            <div class="md:flex">
            <img class="md:w-16 md:h-16 w-full h-44 object-cover" src="https://static.wikia.nocookie.net/marvel_dc/images/a/a6/Batman_Vol_2_2_Variant_Textless.jpg/revision/latest/top-crop/width/360/height/450?cb=20120228075313">
            <p class="flex-1 ml-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius.</p>
        </div>
    </div>
    <div class="bg-white p-4 md:p-3 shadow">
            <div class="md:flex">
            <img class="md:w-16 md:h-16 w-full h-44 object-cover" src="https://static.wikia.nocookie.net/marvel_dc/images/a/a6/Batman_Vol_2_2_Variant_Textless.jpg/revision/latest/top-crop/width/360/height/450?cb=20120228075313">
            <p class="flex-1 ml-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius.</p>
        </div>
    </div>
    <div class="bg-white p-4 md:p-3 shadow">
            <div class="md:flex">
            <img class="md:w-16 md:h-16 w-full h-44 object-cover" src="https://static.wikia.nocookie.net/marvel_dc/images/a/a6/Batman_Vol_2_2_Variant_Textless.jpg/revision/latest/top-crop/width/360/height/450?cb=20120228075313">
            <p class="flex-1 ml-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius.</p>
        </div>
    </div>
</div>
</section> -->
<div class="md:px-16 h-screen flex items-center">
      <div class="md:flex items-center">
    <div class="lg:w-1/2 px-6">
        <h1 class="text-4xl font-semibold">
          A review a day keeps the bad customer experience away!
        </h1>
        <p class="text-gray-600 my-3">
          Our platform aims to give customers a space in which they can share their opinions, experiences or critiques on thousands of different businesses.
        </p>
        <button class="bg-green-500 text-white px-4 py-2 mt-2 rounded-md">Learn more</button>
      </div>
      <div class="lg:w-1/2 px-6">
      <img src="{{asset('assets/business.svg')}}" />
      </div>
    </div>
</div>

<div class="md:px-16 text-gray-800  py-24 mx-auto bg-gray-100">
    <h1 class="text-3xl font-semibold text-center mb-16">New Businesses</h1>
    <div class="md:flex">
        @foreach($newBusinesses as $business)
        <div class="w-full md:w-1/4 px-3">
            <div class="border rounded bg-white">
                <img src="{{'/storage/' . $business->image}}" class="rounded-t h-36 w-full object-cover">
                <div class="p-3">
                    <a href="/businesses/{{ \Str::slug($business->name) }}/{{ $business->id }}" class="font-semibold mb-1">{{ $business->name }}</a>
                    <br />
                    <small class="w-auto inline-block bg-purple-100 text-purple-600 p-1 rounded mb-2">
                        Category
                    </small>
                    <div class="flex">
                    <img src="{{ asset('assets/star.png') }}" class="w-6 rounded-sm mr-1" />
                    <img src="{{ asset('assets/star.png') }}" class="w-6 rounded-sm mr-1" />
                    <img src="{{ asset('assets/star.png') }}" class="w-6 rounded-sm mr-1" />
                    <img src="{{ asset('assets/star.png') }}" class="w-6 rounded-sm mr-1" />
                    <img src="{{ asset('assets/star.png') }}" class="w-6 rounded-sm mr-1" />
                    </div>
                    <div class="text-gray-600 text-sm mt-2">{{ $business->reviews->count() }} reviews</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="md:px-16 text-gray-800  py-24 mx-auto bg-gray-200">
    <h1 class="text-3xl font-semibold text-center mb-16">Recent reviews</h1>

    <div class="flex flex-wrap">
        @foreach($recentReviews as $review)
        <div class="w-full lg:w-1/2 px-3 py-3">
            <div class="p-6 bg-white lg:flex rounded-lg">
                <img src="https://pbs.twimg.com/profile_images/1250415895383506944/EttGxOru_400x400.jpg" class="rounded-full h-20 w-20 ring-4 ring-gray-100 flex-none text-center mb-3 lg:mb-0">
                <div class="lg:pl-6 flex-1">
                <h3 class="text-lg font-semibold text-purple-600 group-hover:text-white">{{ $review->user->name }}</h3>
                <small class="text-gray-500">
                Reviewed {{ $review->business->name }}
                </small><br />
                <small class="text-gray-500">{{ $review->created_at->diffForHumans() }}</small><br />
                <div class="group-hover:text-purple-100 mt-1">
                {{ $review->content }}
                </div>
                <div class="mt-2">
                    <small class="p-1 bg-gray-100 text-gray-600 rounded">Read more...</small>
                </div>
                <div class="flex pt-3">
                    @for($i = 1; $i <= 5; $i++)
                        <img src="{{ asset('assets/star.png') }}" class="w-6 mr-1 rounded-sm" />
                    @endfor
                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@livewireScripts

</body>
</html>
