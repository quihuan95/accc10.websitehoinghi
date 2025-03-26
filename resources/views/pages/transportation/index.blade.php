@extends('layout.app')
@section('title', 'AIRPORT TRANSFER')
@section('content')
  <div class="text-[#212529] mt-7 text-[14px] md:text-[18px] leading-[29px]">
    <div class="px-3">
      Noi Bai International Airport (HAN) is about 30 km north of the city center. Traveling from HAN to the city center is easy
      because there are plenty of transportation options.
    </div>
    {{--  --}}
    <div>
      <div class="text-[20px] md:text-[24px] xl:text-[31px] font-semibold text-white p-2 mt-4 bg-gradient-to-l from-[#7daf42] to-[#4b6e22]">
        PUBLIC BUS - The Cheapest Way to Travel to city center
      </div>
      <div class="flex flex-col mt-3 gap-y-6 leading-[29px] font-medium">
        <div>
          There are 6 bus routes at Domestic Terminal T1 &amp; International Terminal T2:
          <div class="text-[16px] md:text-[19px] font-bold">1) The regular routes operate every 10-15 minutes per trip, serving from 5:00 - 23:00:</div>
          <ul class="flex flex-col leading-[29px] gap-y-1 font-medium list-disc pl-5">
            <li>
              Route 07: Noi Bai - Cau Giay, 8,000 VND/trip (10-20 minutes per trip, serving from 5:00 - 22:30)
            </li>
            <li>
              Route 17: Noi Bai - Long Bien, 9,000 VND/trip (10-15 minutes per trip, serving from 5:10 - 22:00)
            </li>
            <li>
              Route 90: Noi Bai - Kim Ma, 9,000 VND/trip (20 minutes per trip, serving from 6:40 - 22:30)
            </li>
            <li>
              Route 109: Noi Bai - My Dinh, 8,000 VND/trip (20 - 30 minutes per trip, serving from 5:00 - 22:00)
            </li>
            <li>
              Route E10: Noi Bai - Ocean Park Urban Area, 9,000 VND/trip (20 minutes per trip, serving from 06:20 - 22:00)
            </li>
          </ul>
        </div>
        <div>
          <div class="text-[16px] md:text-[19px] font-bold">2) The high-quality routes operate every 30 - 45 minutes per trip, serving from 5:00 - 23:00:</div>
          <ul class="flex flex-col leading-[29px] gap-y-1 font-medium list-disc pl-5">
            <li>
              Route 68: Noi Bai - Ha Dong, 50,000 VND/trip (30 minutes per trip, serving from 7:35 - 20:35).
            </li>
            <li>
              Route 86: Noi Bai - Hanoi Station, 45,000 VND/trip (25 - 30 minutes per trip, serving from 7:00 - 22:15).
            </li>
          </ul>
          <div>
            Among them, bus route number 90 is the most convenient for traveling from Noi Bai Airport to the KR 2024 venue -
            Pullman Hanoi Hotel.
          </div>
        </div>
      </div>
    </div>
    {{--  --}}

    {{--  --}}
    <div>
      <div class="text-[20px] md:text-[24px] xl:text-[31px]  font-semibold text-white p-2 mt-4 bg-gradient-to-l from-[#7daf42] to-[#4b6e22]">
        AIRLINES’ SHUTTLE BUS - A Convenient Way When Traveling by Domestic Flights
      </div>
      <div class="flex flex-col mt-3 gap-y-6 leading-[29px] font-medium">
        <div>
          Several airlines operate shuttle buses from HAN to the city center. You don&#39;t have to fly with these airlines to board the
          shuttle bus.
          <div class="text-[16px] md:text-[19px] font-bold underline">1. Vietnam Airlines</div>
          <div>
            Vietnam Airlines Shuttle Bus is a 16-seat minibus that departs according to Vietnam Airlines&#39; flight schedule. However, it
            normally departs from HAN to the city only when full of passengers, and sometimes you have to wait long for it to depart.
          </div>
          <ul class="flex flex-col leading-[29px] gap-y-1 font-medium list-disc pl-5">
            <li>
              <b>Route:</b> Noi Bai Airport → Hanoi Old Quarter
            </li>
            <li>
              <b>Pick up point at Hanoi Airport:</b> in front of the domestic passenger terminal (Terminal T1)
            </li>
            <li>
              <b>Drop off point in the city:</b> Vietnam Airlines Office, No. 1 Quang Trung Street, Hoan Kiem District (near Hoan Kiem
              Lake)
            </li>
            <li>
              <b>Distance:</b> about 25 km
            </li>
            <li>
              <b>Travel time:</b> about 30-40 minutes
            </li>
            <li>
              <b>Fare:</b> 40,000 VND per person
            </li>
            <li>
              <b>Operating hours:</b> 4:00 - 21:00
            </li>
            <li>
              <b>Frequency:</b> 30-45 minutes
            </li>
          </ul>
        </div>
        <div>
          <div class="text-[16px] md:text-[19px] font-bold underline">2. Vietjet Air</div>
          <div>
            Vietjet Air Shuttle Bus schedule corresponds to the schedule of Vietjet Air flights arriving to and departing from HAN. If
            the bus is passing your destination along the route, you can notify the bus driver to stop anywhere.
          </div>
          <ul class="flex flex-col leading-[29px] gap-y-1 font-medium list-disc pl-5">
            <li>
              <b>Route:</b> Noi Bai Airport → Hanoi Old Quarter
            </li>
            <li>
              <b>Pick up point at Hanoi Airport:</b> parking lot in front of the domestic terminal (Terminal T1)
            </li>
            <li>
              <b>Drop off point in the city:</b> No. 69 Tran Nhan Tong Street, Hoan Kiem District
            </li>
            <li>
              <b>Distance:</b> about 25 km
            </li>
            <li>
              <b>Travel time:</b> about 40-60 minutes
            </li>
            <li>
              <b>Fare:</b> 36,000 VND per person (you can book the whole shuttle bus for 500,000 VND)
            </li>
            <li>
              <b>Operating hours:</b> 4:00 - 21:00
            </li>
            <li>
              <b>Frequency:</b> 30-45 minutes
            </li>
          </ul>
        </div>
      </div>
    </div>
    {{--  --}}

    {{--  --}}
    <div>
      <div class="text-[20px] md:text-[24px] xl:text-[31px] font-semibold text-white p-2 mt-4 bg-gradient-to-l from-[#7daf42] to-[#4b6e22]">
        TAXI
      </div>
      <div class="flex flex-col mt-3 gap-y-6 leading-[29px] font-medium">
        <div>
          <div>
            Taxi service is provided for all flights of the day, including weekends and holidays. Taxis at HAN are easy to find. They wait
            for passengers in front of the domestic and international arrivals halls. Taxi fares are calculated according to the meter for
            the departure from HAN to the city center and should be around 300,000 to 350,000 VND. The way from Hanoi to the
            airport is often discounted by 40-50% compared to the charge calculated according to the meter.
          </div>
          <div>
            There are 12 concessionaire taxi firms at HAN. Here are some popular taxi companies: <b>AIRPORT TAXI, NOIBAI TAXI, TAXI
              GROUP, TAXI MAI LINH, TAXI G7</b> and <b>XANH SM AIRPORT TAXI.</b> In which, XANH SM AIRPORT TAXI is the first electric taxi
            service in Vietnam, you can book the trip via the XANH SM app, available on App Store and Google Play
          </div>
        </div>
      </div>
    </div>
    {{--  --}}

    {{--  --}}
    <div>
      <div class="text-[24px] md:text-[28px] xl:text-[31px] font-semibold text-white p-2 mt-4 bg-gradient-to-l from-[#7daf42] to-[#4b6e22]">
        PRIVATE CAR SERVICE
      </div>
      <div class="flex flex-col mt-3 gap-y-6 leading-[29px] font-medium">
        <div class="text-center">
          Services are provided by Hoa Binh Group
        </div>
        <div class="relative h-[100px]">
          <img class="absolute translate-x-5 h-full w-full object-contain" src="{{ asset('images/logo_hbg.png') }}" alt="logo_hbg">
        </div>
        <div>
          Hoa Binh Group provides private car service from Noi Bai International Airport to the hotel and vice versa. The driver
          holding a card bearing your name will meet you at the pick-up area (outside the Terminal), escort you, and help with the
          luggage to the awaiting vehicle. The driver will arrive on time based on the flight times, thereby avoiding complications
          due to time variations.
        </div>
        <div class="bg-gray-900 h-fit w-full grid grid-cols-12 gap-[1px] p-[1px]">
          <div class="bg-white col-span-3 font-bold items-center justify-center text-center h-10 hidden lg:flex">Service</div>
          <div class="bg-white col-span-4 font-bold items-center justify-center text-center h-10 hidden lg:flex">Type of car</div>
          <div class="bg-white col-span-3 font-bold items-center justify-center text-center h-10 hidden lg:flex">Rate</div>
          <div class="bg-white col-span-2 font-bold items-center justify-center text-center h-10 hidden lg:flex"></div>

          <div class="bg-white col-span-12 font-bold items-center justify-center text-center h-10 lg:hidden flex">Airport transfer in Hanoi</div>

          <div class="bg-white col-span-3 font-bold hidden lg:flex items-start justify-center text-center h-ful py-3">Airport transfer in Hanoi</div>
          <div class="bg-gray-900 col-span-12 lg:col-span-9 flex flex-col h-full gap-[1px]">
            <div class="grid grid-cols-9 gap-[1px]">
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Type of car</div>
              </div>
              <div class="col-span-6 lg:col-span-4 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">4-seat car</div>
                <div class="text-[15px] lg:text-[17px]">(Maximum 2 passengers and luggage)</div>
              </div>
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Rate</div>
              </div>
              <div class="col-span-6 lg:col-span-3 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">US$ 25.00+/car/way</div>
              </div>
              <div class="col-span-9 lg:col-span-2 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold underline text-[#0056b3]"><a href="#">BOOK NOW</a></div>
              </div>
            </div>
            <div class="grid grid-cols-9 gap-[1px]">
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Type of car</div>
              </div>
              <div class="col-span-6 lg:col-span-4 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">7-seat car</div>
                <div class="text-[15px] lg:text-[17px]">(Maximum 4 passengers and luggage)</div>
              </div>
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Rate</div>
              </div>
              <div class="col-span-6 lg:col-span-3 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">US$ 30.00+/car/way</div>
              </div>
              <div class="col-span-9 lg:col-span-2 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold underline text-[#0056b3]"><a href="#">BOOK NOW</a></div>
              </div>
            </div>
            <div class="grid grid-cols-9 gap-[1px]">
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Type of car</div>
              </div>
              <div class="col-span-6 lg:col-span-4 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">7-seat car</div>
                <div class="text-[15px] lg:text-[17px]">(Maximum 4 passengers and luggage)</div>
              </div>
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Rate</div>
              </div>
              <div class="col-span-6 lg:col-span-3 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">US$ 30.00+/car/way</div>
              </div>
              <div class="col-span-9 lg:col-span-2 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold underline text-[#0056b3]"><a href="#">BOOK NOW</a></div>
              </div>
            </div>
            <div class="grid grid-cols-9 gap-[1px]">
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Type of car</div>
              </div>
              <div class="col-span-6 lg:col-span-4 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">16-seat van</div>
                <div class="text-[15px] lg:text-[17px]">(Maximum 8 passengers and luggage)</div>
              </div>
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Rate</div>
              </div>
              <div class="col-span-6 lg:col-span-3 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">US$ 45.00+/car/way</div>
              </div>
              <div class="col-span-9 lg:col-span-2 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold underline text-[#0056b3]"><a href="#">BOOK NOW</a></div>
              </div>
            </div>
            <div class="grid grid-cols-9 gap-[1px]">
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Type of car</div>
              </div>
              <div class="col-span-6 lg:col-span-4 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">29-seat van</div>
                <div class="text-[15px] lg:text-[17px]">(Maximum 18 passengers and luggage)</div>
              </div>
              <div class="col-span-3 lg:hidden bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">Rate</div>
              </div>
              <div class="col-span-6 lg:col-span-3 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold">US$ 65.00+/car/way</div>
              </div>
              <div class="col-span-9 lg:col-span-2 bg-white flex flex-col items-center justify-center text-center py-3">
                <div class="font-bold underline text-[#0056b3]"><a href="#">BOOK NOW</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-end italic font-light text-[15px] lg:text-[17px] -translate-y-3">
          Rate excludes 10% VAT
        </div>
      </div>
    </div>
    {{--  --}}
  </div>
@endsection
