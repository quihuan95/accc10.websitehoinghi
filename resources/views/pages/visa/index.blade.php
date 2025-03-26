@extends('layout.app')
@section('title', 'VIETNAM VISA')
@section('content')
  <div class="text-[#212529] mt-10 text-[14px] md:text-[18px] leading-[29px]">
    {{--  --}}
    <div>
      <div class="text-[20px] md:text-[24px] xl:text-[31px] font-medium my-2 mt-4">
        VISA EXEMPTION FOR ENTERING VIETNAM
      </div>
      <div class="flex flex-col gap-y-4 font-medium">
        <div>
          Foreign nationals from the following 17 countries, as well as officials of the ASEAN Secretariat, are
          eligible for visa exemption when entering Vietnam: Belarus, Chile, Denmark, Finland, France,
          Germany, Italy, Japan, Kazakhstan, South Korea, Kyrgyzstan, Norway, Panama, Russia, Spain, Sweden,
          and the United Kingdom.
        </div>
        <div>
          Additionally, Vietnam offers visa exemptions for citizens of countries with bilateral agreements,
          including Thailand, Cambodia, Malaysia, Indonesia, Singapore, Laos, the Philippines, Myanmar, and
          Brunei, for a certain period of stay.
        </div>
        <div>
          For further details, please visit: <span><a class="text-[#0056b3] underline" href="#">[List of visa exemptions for Vietnam]</a></span>.
        </div>
      </div>
    </div>
    {{--  --}}
    {{--  --}}
    <div>
      <div class="text-[20px] md:text-[24px] xl:text-[31px] font-medium my-2 mt-4">
        VIET NAM E-VISA
      </div>
      <div class="text-[16px] md:text-[19px] font-bold mb-3">General Information:</div>
      <ul class="flex flex-col gap-y-1 font-medium list-disc pl-5">
        <li>
          A Vietnamese visa is a travel document issued by the competent Vietnamese authorities, granting
          permission to enter and travel within Vietnam.
        </li>
        <li>
          A Vietnam e-Visa is valid for up to 90 days and allows either single or multiple entries.
        </li>
        <li>
          The e-Visa is available for foreign passport holders who do not fall under the provisions of <b>Clauses
            1, 2, 3, and 4 of Article 8</b> of the Law on Entry, Exit, Transit, and Residence of Foreigners in Vietnam.
        </li>
        <li>
          The e-Visa application fee must be paid through the e-Visa portal’s e-payment gateway and is
          non-refundable, even if the visa is not granted.
        </li>
        <li>
          E-Visa fees: <b>25 USD for a single-entry visa / 50 USD for a multiple-entry visa</b>.
        </li>
        <li>
          Foreigners using an e-Visa must enter and exit Vietnam through designated international border
          gates approved by the Government (see the list of border gates).
        </li>
      </ul>

      <div class="text-[16px] md:text-[19px] font-bold my-3">Steps to apply for an e-Visa:</div>
      <ul class="flex flex-col gap-y-1 font-medium list-disc pl-5">
        <li>
          <b>STEP 1 - Fill out the Application form:</b> Fill out the Application form accurately
        </li>
        <li>
          <b>STEP 2 - Complete payment:</b> Submit the visa application fee along with your application
        <li>
          <b>STEP 3 - Receive e-Visa online:</b> Receive the result of the application via email or the e-Visa Viet
          Nam homepage
        </li>
      </ul>
    </div>
    {{--  --}}

    <div class="bg-[dodgerblue] h-[57px] flex items-center justify-center text-center mx-auto w-fit px-[15px] text-white shadow rounded-sm hover:underline cursor-pointer my-20">
      CLICK HERE TO APPLY E-VISA NOW
    </div>

  </div>
@endsection
