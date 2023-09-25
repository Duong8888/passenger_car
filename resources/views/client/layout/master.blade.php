<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:12 GMT -->
<head>
    <meta charset="utf-8" />
    <title>index-1 | Jobcy - Admin & Dashboard Template</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
        content="Tailwind Multipurpose Admin & Dashboard Template"
        name="description"
    />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('client.layout.partials.style')
    @yield('page-style')
</head>

<body class="bg-white dark:bg-neutral-800">

@include('client.layout.partials.header')


<div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
    <!-- light-dark mode button -->
    <a href="javascript: void(0);" id="ltr-rtl" class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l" onclick="changeMode(event)">
        <span class="ltr:hidden">LTR</span>
        <span  class="rtl:hidden">RTL</span>
    </a>

</div>

<div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
    <div class="w-48 p-4 bg-white shadow-md" >
        <div>
            <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
            <ul class="flex gap-3 ">
                <li>
                    <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet" href="javascript: void(0);"></a>
                </li>
                <li>
                    <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky" href="javascript: void(0);"></a>
                </li>
                <li>
                    <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red" href="javascript: void(0);"></a>
                </li>
            </ul>
            <ul class="flex gap-3 mt-4">
                <li>
                    <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green" href="javascript: void(0);"></a>
                </li>
                <li>
                    <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink"  href="javascript: void(0);"></a>
                </li>
                <li>
                    <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue" href="javascript: void(0);"></a>
                </li>
            </ul>
        </div>

        <div class="mt-5">
            <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
            <div class="flex justify-center mt-2">
                <!-- light-dark mode button -->
                <a href="javascript: void(0);" id="mode" class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800" onclick="changeMode(event)">
                    <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                    <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- light-dark mode button -->
<a href="javascript: void(0);" onclick="toggleSwitcher()" class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
    <i class="text-xl mdi mdi-cog mdi-spin"></i>
</a>


<div class="main-content">
    <div class="page-content">
        <!-- start home -->
        <section class="relative py-64 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 group-data-[mode=dark]:bg-neutral-900 ">
            <div class="inset-0 absolute bg-[url('../images/home/img-01.html')] bg-center"></div>
            <div class="container relative mx-auto">
                <div class="grid items-center grid-cols-12 rtl:gap-10">
                    <div class="col-span-12 col-start-2">
                        <div class="mb-3 text-center ltr:mr-14 rtl:ml-14">
                            <h1 class="mb-3 text-5xl leading-tight text-white fw-semibold">Search Between More Then <br><span class="text-yellow-500 fw-bold">10,000+</span>
                                Open Jobs.</h1>
                            <p class="text-white text-17">Find jobs, create trackable resumes and enrich your applications.</p>
                        </div>
                        <form action="#">
                            <div class="registration-form">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 xl:col-span-3">
                                        <div class="mt-3 rounded-l filter-search-form filter-border mt-md-0">
                                            <i class="uil uil-briefcase-alt"></i>
                                            <input type="search" id="job-title" class="w-full filter-input-box placeholder:text-gray-100 placeholder:text-13 dark:text-gray-100" placeholder="Job, Company name...">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-span-12 xl:col-span-3">
                                        <div class="mt-3 filter-search-form mt-md-0 filter-border">
                                            <i class="uil uil-map-marker"></i>
                                            <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">&Aring;land Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">C&ocirc;te d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran, Islamic Republic of</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">R&eacute;union</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barth&eacute;lemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-span-12 xl:col-span-3">
                                        <div class="mt-3 filter-search-form mt-lg-0">
                                            <i class="uil uil-clipboard-notes"></i>
                                            <select class="form-select" data-trigger name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                                <option value="4">Accounting</option>
                                                <option value="1">IT & Software</option>
                                                <option value="3">Marketing</option>
                                                <option value="5">Banking</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-span-12 xl:col-span-3">
                                        <div class="h-full mt-3">
                                            <button class="btn group-data-[theme-color=violet]:bg-violet-400 group-data-[theme-color=sky]:bg-sky-400 group-data-[theme-color=red]:bg-red-400 group-data-[theme-color=green]:bg-green-400 group-data-[theme-color=pink]:bg-pink-400 group-data-[theme-color=blue]:bg-blue-400 border rounded-lg border-transparent ltr:xl:rounded-l-none rtl:xl:rounded-r-none w-full py-[18px] text-white" type="submit"><i class="uil uil-search me-1"></i> Find Job</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <ul class="mt-4 text-center">
                        <li class="inline-block text-white">
                            <i class="text-lg text-yellow-500 mdi mdi-tag-multiple-outline"></i>
                            Trending Keywords:
                        </li>
                        <li class="inline-block text-white/50"><a href="javascript:void(0)"> Design, </a></li>
                        <li class="inline-block text-white/50"><a href="javascript:void(0)"> Development, </a></li>
                        <li class="inline-block text-white/50"><a href="javascript:void(0)"> Manager, </a></li>
                        <li class="inline-block text-white/50"><a href="javascript:void(0)"> Senior </a></li>
                    </ul>
                </div>
            </div>
            <img src="client/images/bg-shape.png" alt="" class="absolute block -bottom-5 dark:hidden">
            <img src="client/images/bg-shape-dark.png" alt="" class="absolute hidden -bottom-5 dark:block">
        </section>
        <!-- end home -->

        <!-- start category -->
        <section class="py-20 dark:bg-neutral-800">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-5">
                    <div class="text-center">
                        <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Browser Jobs Categories</h3>
                        <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the
                            right freelancers.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                    <i class="uim uim-layers-alt"></i>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">IT &amp; Software</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">2024 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                    <i class="uim uim-airplay"></i>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">Technology</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1250 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                    <i class="uim uim-bag"></i>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">Government</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">802 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.2] mx-auto dark:bg-violet-900">
                                    <i class="uim uim-user-md"></i>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">Accounting / Finance</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">577 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                    <i class="uim uim-hospital"></i>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">Construction / Facilities</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">285 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                    <i class="uim uim-telegram-alt"></i>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">Tele-communications</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">495 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                    <i class="uim uim-scenery"></i>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">Design & Multimedia</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1045 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.2] mx-auto dark:bg-violet-900">
                                    <i class="uim uim-android-alt"></i>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">Human Resource</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1516 Jobs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="mt-5 text-center">
                        <a href="job-categories.html" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Browse All Categories <i class="uil uil-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end category -->

        <!-- start job list -->
        <section class="py-20 bg-gray-50 dark:bg-neutral-700">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-5">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">New & Random Jobs</h3>
                        <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                    </div>
                </div>
                <div class="nav-tabs chart-tabpill">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                            <div class="p-1.5 bg-white dark:bg-neutral-900 shadow-lg shadow-gray-100/30 rounded-lg dark:shadow-neutral-700">
                                <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="recent-job" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50 active" aria-current="page">Recent Jobs</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="featured-jobs-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Featured Jobs</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="freelancer-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Freelancer</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="part-time-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Part Time</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="full-time-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Full Time</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="block w-full tab-pane" id="recent-job">
                            <div class="pt-8 ">
                                <div class="space-y-8">
                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane ssRichardson</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                            - 2 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                        <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                        <span class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 0
                                                            - 1 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                        <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        <span class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden w-full tab-pane" id="featured-jobs-tab">
                            <div class="pt-8 ">
                                <div class="space-y-8">
                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-2">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                        <span class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 0
                                                            - 1 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                            - 2 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-300">Experience :</span> 4+ years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden w-full tab-pane" id="freelancer-tab">
                            <div class="pt-8 ">
                                <div class="space-y-8">
                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                            - 2 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 2
                                                            - 3 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-2">
                                                        <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden w-full tab-pane" id="part-time-tab">
                            <div class="pt-8 ">
                                <div class="space-y-8">
                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-2">
                                                        <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                            - 2 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 0
                                                            - 1 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-50"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 2 - 3 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="hidden w-full tab-pane" id="full-time-tab">
                            <div class="pt-8 ">
                                <div class="space-y-8">
                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-2">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                            - 2 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 0
                                                            - 1 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                            languages only differ in their grammar. </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>

                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="client/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                        </h5>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 2 - 3 years</p>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-span-12 lg:col-span-5">
                                                    <div class="text-start lg:text-end dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <a href="job-categories.html" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">View More  <i class="uil uil-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end job list -->

        <!-- start process -->
        <section class="py-20 dark:bg-neutral-800">
            <div class="container mx-auto">
                <div class="nav-tabs round-pill">
                    <div class="grid items-center grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-6">
                            <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">How It Work</h3>
                            <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the
                                right freelancers.</p>

                            <div class="mt-5">
                                <ul class="text-gray-700 nav">
                                    <li class="w-full mb-[22px]">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-home-tab" class="relative inline-block w-full p-2 active group/active" aria-current="page">
                                            <div class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                            <div class="flex">
                                                <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:group-[.active]:bg-sky-500 group-data-[theme-color=red]:group-[.active]:bg-red-500 group-data-[theme-color=green]:group-[.active]:bg-green-500 group-data-[theme-color=pink]:group-[.active]:bg-pink-500 group-data-[theme-color=blue]:group-[.active]:bg-blue-500">
                                                    <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">1</span>
                                                </div>
                                                <div class="grow ltr:ml-4 rtl:mr-4">
                                                    <h5 class="fs-18 text-gray-900 group-data-[theme-color=violet]:group-[.active]:text-violet-500 group-data-[theme-color=sky]:group-[.active]:text-sky-500 dark:text-gray-50">Register an account</h5>
                                                    <p class="mt-1 mb-2 text-gray-500 dark:text-gray-300">Due to its widespread use as filler text for layouts, non-readability
                                                        is of great importance.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="w-full mb-[22px]">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-profile" class="relative inline-block w-full p-2 group" aria-current="page">
                                            <div class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                            <div class="flex">
                                                <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                    <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">2</span>
                                                </div>
                                                <div class="grow ltr:ml-4 rtl:mr-4">
                                                    <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">Find your job</h5>
                                                    <p class="mt-1 mb-2 text-gray-500">There are many variations of passages of avaibookmark-label, but the majority
                                                        alteration in some form.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="w-full mb-[22px]">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-messages" class="relative inline-block w-full p-2 group" aria-current="page">
                                            <div class="flex">
                                                <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                    <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">3</span>
                                                </div>
                                                <div class="grow ltr:ml-4 rtl:mr-4">
                                                    <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">Apply for job</h5>
                                                    <p class="mt-1 mb-2 text-gray-500">It is a long established fact that a reader will be distracted by the
                                                        readable content of a page.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-span-12 lg:col-span-6">
                            <div class="tab-content">
                                <div class="block tab-pane" id="v-pills-home-tab">
                                    <img src="client/images/process-01.png" alt="" class="max-w-full">
                                </div>
                                <div class="hidden tab-pane" id="v-pills-profile">
                                    <img src="client/images/process-02.png" alt="" class="max-w-full">
                                </div>
                                <div class="hidden tab-pane" id="v-pills-messages">
                                    <img src="client/images/process-03.png" alt="" class="max-w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end process -->

        <!-- start cta -->
        <section class="py-20 bg-gray-50 dark:bg-neutral-700">
            <div class="container mx-auto">
                <div class="nav-tabs round-pill">
                    <div class="grid items-center grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                            <div class="text-center">
                                <h2 class="mb-5 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Browse Our <span class="text-yellow-500 fw-bold">5,000+</span> Latest
                                    Jobs</h2>
                                <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with
                                    the right freelancers.</p>
                                <div class="pt-2 mt-5">
                                    <a href="javascript:void(0)" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Started Now <i class="align-middle uil uil-rocket ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end cta -->

        <!-- start testimonial -->
        <section class="py-20 dark:bg-neutral-800">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-5">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Happy Candidates</h3>
                        <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 mt-8">
                    <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                        <div class="pb-5 swiper testimonialSlider">
                            <div class="mb-12 swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <img src="client/images/logo/mailchimp.svg" class="h-12 mx-auto" alt="" />
                                        </div>
                                        <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                        <h5 class="mb-0 dark:text-gray-50">Jeffrey Montgomery</h5>
                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Product Manager</p>
                                    </div>
                                </div>
                                <!--end swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <img src="client/images/logo/wordpress.svg" class="h-12 mx-auto" alt="" />
                                        </div>
                                        <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                        <h5 class="mb-0 dark:text-gray-50">Rebecca Swartz</h5>
                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Creative Designer</p>
                                    </div>
                                </div>
                                <!--end swiper-slide-->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <img src="client/images/logo/instagram.html" class="h-12 mx-auto" alt="" />
                                        </div>
                                        <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                            Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                            shortcuts. Even if the client is being careless. "</p>
                                        <h5 class="mb-0 dark:text-gray-50">Charles Dickens</h5>
                                        <p class="mb-0 text-gray-500 dark:text-gray-300">Store Assistant</p>
                                    </div>
                                </div>
                                <!--end swiper-slide-->
                            </div>
                            <!--end swiper-wrapper-->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end testimonial -->

        <!-- start blog -->
        <section class="py-20 bg-gray-50 dark:bg-neutral-700">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-5">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Quick Career Tips</h3>
                        <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <div class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                            <div class="relative overflow-hidden">
                                <img src="client/images/blog/img-01.jpg" alt="" class="rounded">
                                <div class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                <div class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                    <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July, 2021</p>
                                </div>
                                <div class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-5">
                                <a href="blog-details.html" class="primary-link">
                                    <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">How apps is the IT world ?</h5>
                                </a>
                                <p class="mb-3 text-gray-500 dark:text-gray-300">The final text is not yet avaibookmark-label. Dummy texts have Internet tend
                                    been in use by typesetters.</p>
                                <a href="blog-details.html" class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read more <i class="align-middle mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <div class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                            <div class="relative overflow-hidden">
                                <img src="client/images/blog/img-02.jpg" alt="" class="rounded">
                                <div class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                <div class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                    <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July, 2021</p>
                                </div>
                                <div class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-5">
                                <a href="blog-details.html" class="primary-link">
                                    <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">Smartest Applications for Business ?</h5>
                                </a>
                                <p class="mb-3 text-gray-500 dark:text-gray-300">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception.</p>
                                <a href="blog-details.html" class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read more <i class="align-middle mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <div class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                            <div class="relative overflow-hidden">
                                <img src="client/images/blog/img-03.jpg" alt="" class="rounded">
                                <div class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                <div class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                    <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July, 2021</p>
                                </div>
                                <div class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-5">
                                <a href="blog-details.html" class="primary-link">
                                    <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">Design your apps in your own way ?</h5>
                                </a>
                                <p class="mb-3 text-gray-500 dark:text-gray-300">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
                                <a href="blog-details.html" class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read more <i class="align-middle mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog -->

        <!-- start client -->
        <section class="py-10 dark:bg-neutral-800">
            <div class="container mx-auto">
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-01.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-6 xl:h-9" data-tooltip-target="tooltip-default">
                        <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Tooltip content
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-02.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-03.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-04.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-05.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                    <div class="col-span-12 lg:col-span-2">
                        <img src="client/images/logo/logo-06.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                    </div>
                </div>
            </div>
        </section>
        <!-- end client -->


    </div>
</div>



<!-- Footer Start -->
@include('client.layout.partials.footer')
<!-- end Footer -->
@include('client.layout.partials.script')
@yield('page-script')
</body>

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:12 GMT -->
</html>
