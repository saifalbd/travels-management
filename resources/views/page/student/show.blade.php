<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/print.scss'])
</head>

<body class="m-0 p-0">

    <div class="layout relative">
      <div class="b-box absolute top-2 right-2 grid grid-cols-2 gap-1 print:hidden">
        <button onclick="print()" type="button" class="print-btn">
            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z" />
                <path
                    d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z" />
            </svg>
            <span class="ml-2">Print</span>
        </button>
        <button onclick="goBack()" type="button" class="back-btn">
            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 12 16">
                <path
                    d="M10.819.4a1.974 1.974 0 0 0-2.147.33l-6.5 5.773A2.014 2.014 0 0 0 2 6.7V1a1 1 0 0 0-2 0v14a1 1 0 1 0 2 0V9.3c.055.068.114.133.177.194l6.5 5.773a1.982 1.982 0 0 0 2.147.33A1.977 1.977 0 0 0 12 13.773V2.227A1.977 1.977 0 0 0 10.819.4Z" />
            </svg>
            <span class="ml-2">Back</span>
        </button>
    </div>
       
        <div class="box">


           
                <div class="border-b border-b-purple-800 py-3">
                    <h2 class="font-bold text-2xl mb-2 text-center">{{ comInfo('institute') }}</h2>
                    <h4 class="text-md text-center">{{ comInfo('address') }}</h4>

                </div>

           
          
                <div class="border-b border-b-purple-800">
                  <h3 class="text-lg font-semibold">Admission ID: {{$student->id}}</h3>
                  <h3 class="text-lg font-semibold">Student Name: {{$student->name}}</h3>
                </div>



                
         

                <div class="pt-3 grid grid-cols-[auto_auto]">

                  <table class="col-span-1">
                      <tr>
                          <td class="pr-3">Date of Birth</td>
                          <td>: </td>
                          <td><strong>
                                  {{ format($student->date_of_birth) }} </strong> </td>

                      </tr>
                      <tr>
                          <td class="pr-3">Gender</td>
                          <td class="pr-3">: </td>
                          <td><strong>{{ $student->gender }}</strong> </td>
                      </tr>
                      <tr>
                          <td class="pr-3">Father Name</td>
                          <td class="pr-3">:</td>
                          <td><strong>{{ $student->father_name }}</strong> </td>
                      </tr>
                      <tr>
                          <td class="pr-3">Mother Name</td>
                          <td class="pr-3">: </td>
                          <td><strong>{{ $student->mother_name }}</strong> </td>
                      </tr>
                      <tr>
                          <td class="pr-3">Occupation</td>
                          <td class="pr-3">: </td>
                          <td><strong>Student</strong> </td>
                      </tr>
                      <tr>
                          <td class="pr-3">Mobile</td>
                          <td class="pr-3">: </td>
                          <td><strong>{{ $student->mobile }}</strong> </td>
                      </tr>
                      <tr>
                          <td class="pr-3">Mobile Guardian</td>
                          <td class="pr-3">: </td>
                          <td><strong>{{ $student->guardian_mobile }}</strong> </td>
                      </tr>
                      <tr>
                          <td class="pr-3">Email</td>
                          <td class="pr-3">: </td>
                          <td><strong>{{ $student->email }}</strong> </td>
                      </tr>
                      <tr>
                          <td class="pr-3">Present Address</td>
                          <td class="pr-3">: </td>
                          <td><strong>{{ $student->present_address }}</strong> </td>
                      </tr>
                      <tr>
                          <td class="pr-3">Permanent Addr.</td>
                          <td class="pr-3">: </td>
                          <td><strong>{{ $student->permanent_address }}</strong> </td>
                      </tr>


                  </table>

                  <div class="col-span-1 flex justify-center items-center">
                      <img src="{{ $student->avatar->url }}" height="180px;" />
                  </div>

              </div>

           
              <div>
                <h4 class=" font-bold mt-3 mb-2">COURSE INFORMATION</h4>
                <div class=" border-t border-fuchsia-800"></div>

                @foreach ($courses as $c)
                    <div class="mt-3">

                        <!-- Basic Plan -->
                        <h4 class="font-3xl font-bold">{{ $c->course->name }}</h4>

                        <table>
                            <tr>
                                <td class="pr-3">Type</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->type }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Duration</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->course->duration }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Session</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->session }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Roll</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->roll }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Reg</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->registration_no }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Course Fee</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->fee }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Discount</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->discount }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Payable</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->fee - $c->discount }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Paid</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->paid }}</td>
                            </tr>
                            <tr>
                                <td class="pr-3">Dues</td>
                                <td class="pr-3">:</td>
                                <td class="font-semibold">{{ $c->due }}</td>
                            </tr>
                        </table>

                    </div>
                @endforeach

            </div> 



            <div>
              <h4 class=" font-bold mt-3 mb-2">COURSE INFORMATION</h4>
              <div class=" border-t border-fuchsia-800"></div>

              @foreach ($courses as $c)
                  <div class="mt-3">

                      <!-- Basic Plan -->
                      <h4 class="font-3xl font-bold">{{ $c->course->name }}</h4>

                      <table>
                          <tr>
                              <td class="pr-3">Type</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->type }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Duration</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->course->duration }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Session</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->session }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Roll</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->roll }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Reg</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->registration_no }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Course Fee</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->fee }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Discount</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->discount }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Payable</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->fee - $c->discount }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Paid</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->paid }}</td>
                          </tr>
                          <tr>
                              <td class="pr-3">Dues</td>
                              <td class="pr-3">:</td>
                              <td class="font-semibold">{{ $c->due }}</td>
                          </tr>
                      </table>

                  </div>
              @endforeach

          </div> 

          


              

 


          <div>
            <h4 class=" font-bold mt-3 mb-2">FEES INFORMATION</h4>
            <div class="border-t border-fuchsia-800"></div>

            <div class="flex justify-start flex-wrap mt-3">
                @foreach ($student->vouchers as $v)
                    <div class="border border-fuchsia-800 mx-2 px-2">
                        <samp style="font-weight: bold;">
                            {{ $v->amount }}/-</samp>
                        <samp> {{ format($v->date) }} </samp>
                    </div>
                @endforeach
            </div>
      </div>
              



            
        </div>
    </div>





    <script>
        function goBack() {
            window.history.back();
        }
    </script>
