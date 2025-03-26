@extends('layout.app')
@section('title', 'ACCOMMODATION')
@section('content')
  <div class="text-[#212529] mt-7 text-[14px] md:text-[18px] leading-[29px]">
    <div class="px-3 italic text-rose-500 flex flex-col gap-y-3">
      <div>
        * Please note that the ACCC10 Organizing Committee is NOT involved in the bookings listed below. Any inquiries or
        claims should be directed to Hoa Binh Group at vicky@hoabinhtourist.com. Please do not contact the ACCC10
        Organizing Committee regarding these matters.
      </div>
      <div>
        Booking through Hoa Binh GROUP is just one of many options available in Hanoi. The ACCC10 Organizing Committee
        neither requires nor endorses the use of this service.
      </div>
    </div>

    <div class="flex flex-col gap-y-7">
      @foreach ($hotels as $hotel)
        {{--  --}}
        <div class="flex flex-col items-center justify-center gap-y-2 text-center mt-16 mb-5">
          <div class="font-boldonse-regular font-semibold text-2xl md:text-3xl xl:text-4xl tracking-wider">
            {{ $hotel['name'] }}
          </div>
          <div class="font-bold text-lg md:text-xl xl:text-2xl mt-2">
            {{ $hotel['address'] }}
          </div>
          <div class="italic md:text-lg xl:text-xl">
            {{ $hotel['description'] }}
          </div>
          <div class="bg-gray-900 h-fit w-full grid grid-cols-12 gap-[1px] p-[1px]">
            {{-- header --}}
            @foreach ($hotel['table']['header'] as $header)
              <div class="bg-white col-span-{{ $header['col'] }} font-bold hidden lg:flex items-center justify-center text-center h-10">{{ $header['label'] }}</div>
            @endforeach
            {{-- end header --}}
            @foreach ($hotel['table']['content'] as $content)
              {{-- row 1 --}}
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-2">
                <div class="font-bold">Room type</div>
              </div>
              <div class="col-span-9 lg:col-span-6 bg-white flex flex-col items-center justify-center text-center py-2">
                <div class="font-bold">{{ $content['room_type']['main'] }}</div>
                <div class="text-[17px]">{{ $content['room_type']['sub'] }}</div>
              </div>
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-2">
                <div class="font-bold">Rate via Agoda</div>
              </div>
              <div class="col-span-9 lg:col-span-2 bg-white flex flex-col items-center justify-center text-center py-2">
                <div class="font-bold">{{ $content['rate_agoda']['main'] }}</div>
                <div class="text-[17px]">{{ $content['rate_agoda']['sub'] }}</div>
              </div>
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-2">
                <div class="font-bold">Rate via HBG</div>
              </div>
              <div class="col-span-9 lg:col-span-2 bg-white flex flex-col items-center justify-center text-center py-2">
                <div class="font-bold text-rose-500">{{ $content['rate_hbg']['main'] }}</div>
                <div class="text-[17px]">{{ $content['rate_hbg']['sub'] }}</div>
              </div>

              <div class="col-span-12 lg:col-span-2 bg-white flex flex-col items-center justify-center text-center py-2">
                <div class="font-bold underline text-[#0056b3]"><a href="{{ $content['link']['link'] }}">{{ $content['link']['label'] }}</a></div>
              </div>
              {{-- end row 1 --}}
            @endforeach
          </div>
        </div>
        {{--  --}}
      @endforeach
    </div>

    {{--  --}}
    <div class="flex flex-col gap-y-2 py-5 px-3 bg-[#dce7d6] mt-16">
      <div class="font-bold text-lg md:text-xl">
        USEFUL INFORMATION:
      </div>
      <ul class="text-[14px] md:text-[16px] custom-list">
        <li>
          All the rates above include breakfast, in-room Wi-Fi, two bottles of mineral water per room per day, and
          complimentary access to the gym and pool. A 5% service charge and 8% VAT are not included.
        </li>
        <li>
          For urgent help with booking issues or additional directions, please feel free to contact Ms. Vicky at:
          Mobile/WhatsApp: +84 913 631 936 | Email: vicky@hoabinhtourist.com
        </li>
      </ul>
    </div>
    {{--  --}}
  </div>
@endsection
